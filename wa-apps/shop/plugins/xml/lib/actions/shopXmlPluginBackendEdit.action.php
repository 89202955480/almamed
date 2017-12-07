<?php

class shopXmlPluginBackendEditAction extends waViewAction
{

    public function execute()
    {

        $plugin = wa('shop')->getPlugin('xml');


        $this->setLayout(new shopBackendLayout());
        $this->layout->assign('no_level2', true);

        $cat_parent = $plugin->getFullTree(false,true,array(),true);

        if (waRequest::method() == 'post') {
            $category = waRequest::post('del_cat');
            $all_cat = waRequest::post('all_cat');
            if($category){
                foreach($all_cat as $key => $cat){
                    if (in_array($cat, $category)) {
                        unset($all_cat[$key]);
                    }
                }
            }
            if($plugin->indexCat($all_cat)){
                $this->view->assign('import', true);
            }
        }


        $this->view->assign('cat', $cat_parent);
    }

}