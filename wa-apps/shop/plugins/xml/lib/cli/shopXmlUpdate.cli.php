<?php

class shopXmlUpdateCli extends waCliController
{




    public function execute()
    {

        $plugin = wa('shop')->getPlugin('xml');
        $settings = $plugin->getSettings();
        $cat_parent = $plugin->getFullTree(false,true,array(),true);

        $root = realpath(__DIR__."../../../../../../../");

        $arrResult = array();
        foreach($settings as $key => $set){

            if(strstr($key, 'category')){
                $all_cat = array();
                $ids = explode('_',$set);
                foreach($cat_parent as $cat){
                    if (!in_array($cat['id'], $ids)) {
                        $all_cat[] = $cat['id'];
                    }
                }
                $path = $root.'/bx-import/'.$key.'.xml';
                $plugin->indexCat($all_cat,$path);
            }

            if(strstr($key, 'brands')){
                $ids_b = explode('_',$set);
                $path = $root.'/bx-import/'.$key.'.xml';
                $plugin->indexBrand($ids_b,$path);
            }

        }




    }
    

}