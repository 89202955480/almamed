<?php
class shopCurrencyratesPluginUpdateController extends waJsonController
{
 protected $rate_model;
 protected $cur_model;
 function __construct()
 {
  $this->rate_model = new shopCurrencyratesModel();
  $this->cur_model = new shopCurrencyModel();
 }
 
 function execute()
 {
  $code = waRequest::post('code','',waRequest::TYPE_ARRAY);
  
  $cur_rate = new shopCurrencyratesSetrate();
  $rate = Array();//Для курса по ЦБ
  $tmp_rate = Array();//Для умноженного курса
  $state = Array();//Есть или нет курс для данной валюты в ЦБ
  $error = Array();
  for($i=0;$i<count($code);$i++)
  {
    $rate[$code[$i]] = $cur_rate->getRate($code[$i]);
	if(!empty($rate[$code[$i]]))
	{
	 $this->rate_model->updateByField('code',$code[$i],array('rate'=>$rate[$code[$i]],'dateup'=>date('Y-m-d')));
	 $fields = $this->rate_model->getByField('code',$code[$i]);
	 $tmp_rate[$code[$i]] = $rate[$code[$i]] * (float)$fields['multiple'];
	 $tmp_rate[$code[$i]] += (float)$fields['summary'];
	 
	 if($fields['rounding_side'] == 0)
     {
      $tmp_rate[$code[$i]] = $this->RoundingRateFloor($fields['rounding'],$tmp_rate[$code[$i]]);
     }else if($fields['rounding_side'] == 1){
      $tmp_rate[$code[$i]] = $this->RoundingRateCeil($fields['rounding'],$tmp_rate[$code[$i]]);
     }else if($fields['rounding_side'] == 2){
      $tmp_rate[$code[$i]] = $this->RoundingRate($fields['rounding'],$tmp_rate[$code[$i]]);
     }
     $this->cur_model->changeRate($code[$i],$tmp_rate[$code[$i]]);
	 $state[$code[$i]] = true;
	}else{
	 $state[$code[$i]] = false;
	 $error[$code[$i]] = "Центробанк не имеет курса данной валюты к рублю";
	}   
  }  
  
  $this->response['rate'] = $rate;
  $this->response['tmp_rate'] = $tmp_rate;
  $this->response['state'] = $state;
  $this->response['error'] = $error;
  $this->response['date'] = date('Y-m-d');
  unset($cur_rate, $rate, $tmp_rate, $state, $error);
 }
 
  //Функция округления до ближайшего числа
 private function RoundingRate($state, $rate)
 {
  $result = $rate;
  if($state == 1)
  {
   $result = round($result);
  }else if($state==2){
   $result = round($result,1);
  }else if ($state==3){
   $result = round($result,2);
  }
  
  return $result;
 }
 
 //Функция округления до меньшего числа
 private function RoundingRateFloor($state, $rate)
 {
  $result = $rate;
  if($state == 1)
  {
   $result = floor($result);
  }else if($state==2){
   $result = floor($result*10)/10;
  }else if ($state==3){
   $result = floor($result*100)/100;
  }
  
  return $result;
 }
 
 //Функция округления до большего числа
 private function RoundingRateCeil($state, $rate)
 {
  $result = $rate;
  if($state == 1)
  {
   $result = ceil($result);
  }else if($state==2){
   $result = ceil($result*10)/10;
  }else if ($state==3){
   $result = ceil($result*100)/100;
  }
  
  return $result;
 }
 
 function __destruct()
 {
  if(isset($this->rate_model)) unset($this->rate_model);
  if(isset($this->cur_model)) unset($this->cur_model);
 }
}