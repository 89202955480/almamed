<?php

/**
 * @author wa-apps.ru <info@wa-apps.ru>
 * @copyright 2013-2015 wa-apps.ru
 * @license Webasyst License http://www.webasyst.ru/terms/#eula
 * @link http://www.webasyst.ru/store/plugin/shop/productbrands/
 */
class shopAccordionPlugin extends shopPlugin
{


    static public function getStaticUrlPlugin(){
        return wa()->getAppStaticUrl('shop', false).'plugins/accordion/';
    }


    public function getAcordionListPage(){
        $plugin = wa('shop')->getPlugin('accordion');
        $settings = $plugin->getSettings();

        $tpl = '';
        $tpl .= '<link rel="stylesheet" type="text/css" href="'.self::getStaticUrlPlugin().'css/style.css" />';
        $tpl .= '<section class="ac-container">';

        foreach($settings['title'] as $key => $val):
        $tpl .= '<div>';
        $tpl .= '<input id="ac-'.$key.'" class="ac-checkbox-container" name="accordion-'.$key.'" type="checkbox" />';
        $tpl .= '<label for="ac-'.$key.'">'.$val.'</label>';
        $tpl .= '<article class="ac-small">';
        $tpl .= '<p>'.$settings['desc'][$key].'</p>';
        $tpl .= '</article>';
        $tpl .= '</div>';
        endforeach;
        $tpl .= '</section>';

        return $tpl;
    }

    public function saveSettings($settings = array()) {
        parent::saveSettings($settings);
    }



}

