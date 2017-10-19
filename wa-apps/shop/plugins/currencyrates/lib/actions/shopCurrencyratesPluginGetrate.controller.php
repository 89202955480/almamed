<?php
class shopCurrencyratesPluginGetrateController extends waJsonController
{
  protected $rate_model;
 function __construct()
 {
  $this->rate_model = new shopCurrencyratesModel();
 }
 
 function execute()
 {
  $code = waRequest::post('code','',waRequest::TYPE_STRING);
  
  $prim_cur = $this->rate_model->getPrimaryCurrency();
  $rate = $this->rate_model->getRate($code);
  $result = $this->rate_model->query("SELECT dateup, multiple, summary, rounding, rounding_side FROM shop_currencyrates WHERE code = ?",$code)->fetch();
  
  $this->response['rate'] = $rate;
  $this->response['prim_cur'] = $prim_cur;  
  $this->response['date'] = $result['dateup'];
  $this->response['mul'] = $result['multiple'];
  $this->response['sum'] = $result['summary'];
  $this->response['rounding'] = $result['rounding'];
  $this->response['rounding_side'] = $result['rounding_side'];
  $this->response['this_date'] = date("Y-m-d");
 }
 
 function __destruct()
 {
  if(isset($this->rate_model)) unset($this->rate_model);
 }
}