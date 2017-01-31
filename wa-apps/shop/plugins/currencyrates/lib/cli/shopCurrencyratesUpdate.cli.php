<?php
class shopCurrencyratesUpdateCli extends waCliController
{
 //Функция проверки основной валюты
 private function PrimaryCurrencyFlag()
 {
  $cur_model = new shopCurrencyModel();
  $prim_cur = $cur_model->getPrimaryCurrency();
  $result=true;
  if($prim_cur == 'RUB')
  {
   $result = true;
  }else{
   $result = false;
  }
  unset($cur_model);
  
  return $result;
 }
 
 //Определение дополнительных или лишних валют
 private function comparisson_Of_arrays($data, $plugin_data)
 {
  $mas_one = array();
  $mas_two = array();
  foreach($data as $key => $val)
  {
   $mas_one[] = $val['code'];
  }
  
  foreach ($plugin_data as $key => $val)
  {
   $mas_two[] = $val['code'];
  }  
  
  $mas = array_diff($mas_one, $mas_two);
  if(count($mas) !=0)
  {
   $this->updatePluginData($mas,1);
  }else{
   $mas = array_diff($mas_two, $mas_one);
   if(count($mas) !=0)
   {
    $this->updatePluginData($mas,2);
   }
  } 
  return true;  
 }
 
 
 private function updatePluginData($mas,$flag=1)
 {
   $rate_model = new shopCurrencyratesModel();
   $cur_model = new shopCurrencyModel();
   //Добаление недостающих валют 
   if($flag==1)
   {
    $date = null;
    foreach($mas as $key=>$val)
    {
	 $data = $cur_model->getByField('code',$val);
     $data['date'] = $date;
     $rate_model->addCurrency($data);
    }
   //Удаление лишних валют	
   }else if($flag==2){
     foreach($mas as $key=>$val)
    {
     $rate_model->deleteCurrency($val);
    }
   }   
   if(isset($rate_model)) unset($rate_model);
   if(isset($cur_model)) unset($cur_model);   
   return true;
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
 
 //Функция обновления курса
 private function UpdateRates()
 {
  $cur_model = new shopCurrencyModel();
  $rate_model = new shopCurrencyratesModel();
  $cur_rate = new shopCurrencyratesSetrate();
  $date = date('Y-m-d');
  $query = $cur_model->query("SELECT code FROM shop_currency WHERE code <> 'RUB'")->fetchAll();
  foreach($query as $key =>$val)
  {
   $rate = $cur_rate->getRate($val['code']);//Снимаем курс для данной валюты
   if(!empty($rate))
   {
     $rate_model->updateByField('code',$val['code'], array('rate'=>$rate,'dateup'=>$date));
     $fields = $rate_model->getByField('code',$val['code']);//Берём коэффициенты для данной валюты
     $rate = $rate*$fields['multiple'];
     $rate += $fields['summary'];
     if($fields['rounding_side'] == 0)
     {
      $rate = $this->RoundingRateFloor($fields['rounding'],$rate);
     }else if($fields['rounding_side'] == 1){
      $rate = $this->RoundingRateCeil($fields['rounding'],$rate);
     }else if($fields['rounding_side'] == 2){
      $rate = $this->RoundingRate($fields['rounding'],$rate);
     }
      $cur_model->changeRate($val['code'],$rate);
   }   
  }
  unset($cur_model);
  unset($rate_model);
  unset($cur_rate);
 }
 
 function execute()
 {
  if(extension_loaded('soap'))
  {
   $state = $this->PrimaryCurrencyFlag();
   if($state)
   {
    $cur_model = new shopCurrencyModel();
    $rate_model = new shopCurrencyratesModel();   
    //Проверяем есть ли данные в нашей таблице
    $state = $rate_model->query("SELECT code FROM shop_currencyrates")->fetchAll();
    if(!$state)//если данных нет то заносим их из shop_currency
    {
     $code= Array();
     $rate=array();
     $sort = array();
     $date = null;
     $query = $cur_model->getAll();
     foreach($query as $key=>$val)
     {
      $code[] = $val['code'];
	  $rate[]=$val['rate'];
	  $sort[] = $val['sort'];
     }    
     for($i=0; $i<count($code); $i++)
     {
      $data = array('code'=>$code[$i],'rate'=>$rate[$i],'sort'=>$sort[$i],'dateup'=>$date);
      $rate_model->insert($data);
     }
    }else{//Если данные есть...
     //Не прроисходило ли добавления валют   
     $data = $cur_model->query('SELECT code FROM shop_currency')->fetchAll();
     $plugin_data = $rate_model->query('SELECT code FROM shop_currencyrates')->fetchAll();	
     $this->comparisson_Of_arrays($data, $plugin_data);//синхронизация количества валют магазина и плагина
    }  
   $this->UpdateRates();
   unset($cur_model);
   unset($rate_model);   
  }else{
   return false;
  }
  }else{
   return;
  }
 
 }
} 