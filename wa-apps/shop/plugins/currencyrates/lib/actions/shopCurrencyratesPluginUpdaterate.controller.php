<?php
class shopCurrencyratesPluginUpdaterateController extends waJsonController
{
 protected $cur_model;
 protected $rate_model;
 function __construct()
 {
  $this->cur_model = new shopCurrencyModel();
  $this->rate_model = new shopCurrencyratesModel();
 }
 
 
 function execute()
 {
  $code = waRequest::post('code','',waRequest::TYPE_STRING);
  $rounding = waRequest::post('rounding',2,waRequest::TYPE_INT);
  $rounding_side = waRequest::post('rounding_side',2,waRequest::TYPE_INT);
  $multiple=waRequest::post('multiple');
  $summary = waRequest::post('summary');
  $multiple = (float)$multiple;
  $summary = (float)$summary;
  $rate = waRequest::post('rate');
  $this->cur_model->changeRate($code, (float)$rate);
  $prim_cur = $this->cur_model->getPrimaryCurrency();
  $this->rate_model->updateByField('code',$code,array('rounding'=>$rounding,'rounding_side'=>$rounding_side,'multiple'=>$multiple,'summary'=>$summary));
  $this->response['prim_cur'] = $prim_cur;
  $this->response['state'] = true;
  
 }
 
 function __destruct()
 {
  if(isset($this->cur_model)) unset($this->cur_model);
  if(isset($this->rate_model)) unset($this->rate_model);
 }
}