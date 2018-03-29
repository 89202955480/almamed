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
            <div class="field">
                <div class="name">Цена</div>
                <div class="value">
                    <input type="text" name="product[price_user]" value="'.$param->price_user.'">
                </div>
            </div>
            <div class="field">
                <div class="name">Срок поставки</div>
                <div class="value">
                    <input type="text" name="product[delivery_user]" value="'.$param->delivery_user.'">
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

    public function access_user_cart($param){
        $plugin = wa('shop')->getPlugin('castomfield');
        $settings = $plugin->getSettings();
        if($settings){
            $view = wa()->getView();
            $view->assign('settings', explode(",", $settings['access_user']));
            $view->assign('param', $param);
            $html = $view->fetch($_SERVER['DOCUMENT_ROOT'].self::getStaticUrlPlugin().'templates/actions/FrontendCart.html');
            return $html;
        }
    }
}

