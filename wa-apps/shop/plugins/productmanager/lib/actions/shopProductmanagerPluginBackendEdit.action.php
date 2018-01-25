<?php

class shopProductmanagerPluginBackendEditAction extends waViewAction
{




    public function execute(){


        $product = new shopProductModel();

        $manager_id = waRequest::post('manager_id', "int");
        $product_id = waRequest::post('product_id');
        foreach($product_id as $id){
            if($id)
            $product->updateById($id,array("manager" => $manager_id));
        }

        print 1;


    }

}