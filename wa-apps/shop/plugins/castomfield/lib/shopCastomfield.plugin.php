<?php


class shopCastomfieldPlugin extends shopPlugin
{

    static public function getStaticUrlPlugin(){
        return wa()->getAppStaticUrl('shop', false).'plugins/castomfield/';
    }


    public function backend_product($param){
        return array(
            'edit_basics' => '
            <div class="field">
                <div class="name">Комментарий по товару</div>
                <div class="value">
                    <textarea name="product[comment_user]">'.$param->comment_user.'</textarea>
                </div>
            </div>
            ',
        );
    }


    public function access_user(){
        $plugin = wa('shop')->getPlugin('castomfield');
        $settings = $plugin->getSettings();
        if($settings){
            $view = wa()->getView();
            $view->assign('settings', explode(",", $settings['access_user']));
            $html = $view->fetch($_SERVER['DOCUMENT_ROOT'].self::getStaticUrlPlugin().'templates/actions/Frontend.html');
            return $html;
        }
    }

    public function access_user_settings(){
        $plugin = wa('shop')->getPlugin('castomfield');
        $settings = $plugin->getSettings();
        return explode(",",$settings['access_user']);
    }

}

