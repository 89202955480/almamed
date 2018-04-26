<?php


class shopCastomfieldPlugin extends shopPlugin
{

    static public function getStaticUrlPlugin(){
        return wa()->getAppStaticUrl('shop', false).'plugins/castomfield/';
    }

    static public function getDopFieldsCategory($id){
        $settings = new shopSeoSettings();
        $seo_settings = $settings->getAllByCategoryID($id);
        return $seo_settings['general'];
    }

    public function backend_category_dialog($params){

        $settings = new shopSeoSettings();
        $seo_settings = $settings->getAllByCategoryID($params['id']);

        return waHtmlControl::getControl(waHtmlControl::INPUT, 'seo_settings[general][dop_name_one]', array(
            'value' => ifset($seo_settings['general']['dop_name_one']),
            'title' => "Доп. название 2",
            'description' => "Вывод текста под названием категории в списке категории",
            'title_wrapper' => '%s',
            'control_wrapper' => '<div class="field"><div class="name">%s</div><div class="value no-shift">%s%s</div></div>',
            'description_wrapper' => '<br><span class="hint">%s</span>',
        )).waHtmlControl::getControl(waHtmlControl::INPUT, 'seo_settings[general][dop_name_two]', array(
            'value' => ifset($seo_settings['general']['dop_name_two']),
            'title' => "Доп. название 3",
            'description' => "Вывод текста под названием категории в списке категории",
            'title_wrapper' => '%s',
            'control_wrapper' => '<div class="field"><div class="name">%s</div><div class="value no-shift">%s%s</div></div>',
            'description_wrapper' => '<br><span class="hint">%s</span>',
        ));
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

