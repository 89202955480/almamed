<?php
class shopCurrencyratesPluginSettingsAction extends waViewAction
{
 //Функция проверки основной валюты
 private function PrimaryCurrencyFlag()
 {
  $cur_model = new shopCurrencyModel();
  $cur = $cur_model->getPrimaryCurrency();
  $result = true;
  
  if($cur == 'RUB')
  {
   $result = true;
  }else{
   $result = false;
  }
  unset($cur_model);
  return $result;
 }
 
 //Определение дополнительных или лишних валют
 protected function comparisson_Of_arrays($data, $plugin_data)
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
 
 
 protected function updatePluginData($mas,$flag=1)
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
 
 function execute()
 {
  $plugin = new shopCurrencyratesPlugin(array('id'=>'currencyrates', 'app_id'=>wa()->getApp()));//Для создания таблицы если её нет
  $this->view->assign('menu','');
  if(extension_loaded('soap'))//Если расширение SOAP подключено
  {    
     $state = $this->PrimaryCurrencyFlag();
     if($state)//Если основная валюта рубль
     {
      //Закидываем данные об основной валюте
      $cur_model = new shopCurrencyModel();
      $rate_model = new shopCurrencyratesModel();
      $prim_cur = $cur_model->getCurrencies('RUB');
	  $update_all_rates='';//Кнопка обновить курс для всех валют
	  
      foreach($prim_cur as $k => $v)
      {
       $pc_code = $v['code'];
	   $pc_title = $v['title'];
      }
      $this->view->assign('pc_code',$pc_code);
      $this->view->assign('pc_title',$pc_title);
	  
      //Закидываем данные о других валютах
      $cur_list = $cur_model->query("SELECT code, rate FROM shop_currency WHERE code <>'RUB'")->fetchAll('code');
      if($cur_list)
      {
       $rate = Array();
       foreach($cur_list as $key => $value)
       {
         $rate[$key] = (float)$value['rate'];
	     $result[$key] = waCurrency::getInfo($key);
	     $cur_list[$key]['title'] = $result[$key]['title'];
	     $cur_list[$key]['sign'] = $result[$key]['sign'];
        }   
       $this->view->assign('cur_list',$cur_list);
       $this->view->assign('rate',$rate);
	   unset($rate);
      }else{
       $this->view->assign('cur_list','');
      }
	  
	  
      //Проверяем есть ли данные в нашей таблице
      $state = $rate_model->query("SELECT code FROM shop_currencyrates")->fetchAll();
      if(!$state)//если данных нет то заносим их из shop_currency
      {
       $code= Array();
       $rate=array();
       $sort = array();
       $date = null;
	   $state = Array();
       $query = $cur_model->getAll();
      foreach($query as $key=>$val)
      {
       $code[] = $val['code'];
	   $rate[]=$val['rate'];
	   $sort[] = $val['sort'];
      }   
      for($i=0; $i<count($code); $i++)
      {
	    $state[$code[$i]] = "<h5 style='color: red;' class='not_update_rate'>Курс не обновлён по ЦБ</h5>";
        $data = array('code'=>$code[$i],'rate'=>$rate[$i],'sort'=>$sort[$i],'dateup'=>$date);
        $rate_model->insert($data);
      }
	  
	  $this->view->assign('state_string',$state);
	  $update_all_rates =  '<div id="update_all_rate"><a href="javascript:void(0);" class="button yellow">Обновить курс всех валют</a></div>';
	  unset($code, $rate, $sort, $date, $state, $query);
     }else{//Если данные есть...
	  $state = Array();
	  $date = date('Y-m-d');
      //Не прроисходило ли добавления валют   
      $data = $cur_model->query('SELECT code FROM shop_currency')->fetchAll();
      $plugin_data = $rate_model->query('SELECT code FROM shop_currencyrates')->fetchAll();	
      $this->comparisson_Of_arrays($data, $plugin_data);//синхронизация количества валют магазина и плагина
	  unset($data, $plugin_data);
	  //запись для каждой валюты
	  $plugin_data = $rate_model->getAll();
	  foreach($plugin_data as $key => $val)
      {
	   if($val['code'] != 'RUB')
	   { 
	    if($val['dateup'] == $date)
	    {
	     $state[$val['code']] = "<h5 style='color: green;'>Курс на ".$date."</h5>";
	    }else if(($val['dateup'] != $date) && ($val['dateup'] != null)){
	     $state[$val['code']] = "<h5 style='color: red;' class='not_update_rate'>Курс на ".$val['dateup']."</h5>";
		 $update_all_rates =  '<div id="update_all_rate"><a href="javascript:void(0);" class="button yellow">Обновить курс всех валют</a></div>';
	    }else if($val['dateup'] == null){
	     $state[$val['code']] = "<h5 style='color: red;' class='not_update_rate'>Курс не по ЦБ ".$val['dateup']."</h5>";
		 $update_all_rates =  '<div id="update_all_rate"><a href="javascript:void(0);" class="button yellow">Обновить курс всех валют</a></div>';
	    }
	   }	   
	  }	 
      $this->view->assign('state_string',$state);
	  unset($plugin_data, $state, $date);
    }  
	$this->view->assign('update_all_rates',$update_all_rates);
    unset($cur_model);
    unset($rate_model);

   
   //Закидываем путь скрипта для консоли
    $cmd_path = wa()->getConfig()->getPath('root').DIRECTORY_SEPARATOR ."cli.php shop CurrencyratesUpdate";
    $this->view->assign('cmd_path',$cmd_path);
  }else{//Если рубль не является основной валютой
   $this->view->assign('menu','<h2>Ошибка: "Российский рубль" не является основной валютой!</h2>');
  }
 }else{
  $this->view->assign('menu','<h2>Не подключено расширение SOAP, необходимое для работы плагина!</h2>');
  return false;
 }
  unset($plugin);
 }
}