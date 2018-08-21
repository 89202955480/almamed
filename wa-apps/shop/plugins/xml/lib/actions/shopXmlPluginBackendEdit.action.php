<?php

class shopXmlPluginBackendEditAction extends waViewAction
{

    public function execute()
    {

        $plugin = wa('shop')->getPlugin('xml');



        $this->setLayout(new shopBackendLayout());
        $this->layout->assign('no_level2', true);


        $brands = new shopProductbrandsPlugin(false);


        $cat_parent = $plugin->getFullTree(false,true,array(),true);

        if (waRequest::method(false) == 'post') {
            if(waRequest::post('del_cat')){
                $category = waRequest::post('del_cat');
                $all_cat = waRequest::post('all_cat');
                if($category){
                    foreach($all_cat as $key => $cat){
                        if (in_array($cat, $category)) {
                            unset($all_cat[$key]);
                        }
                    }
                }
                if($plugin->indexCat($all_cat,false)){
                    $this->view->assign('import', true);
                }
            }
            if(waRequest::post('brand')){
                $brand = waRequest::post('brand');
                if($plugin->indexBrand($brand)){
                    $this->view->assign('import', true);
                }
            }
        }

        $this->view->assign('cat', $cat_parent);
        $this->view->assign('brand', $brands->getBrands());
    }

}