<?php

class shopQuickeditorPlugin extends shopPlugin
{
    private static $plugin_reference;

    public function __construct($info)
    {
        parent::__construct($info);
        if (!self::$plugin_reference) {
            self::$plugin_reference = &$this;
        }
    }

    /**
     * Getting a reference of this plugin.
     *
     * @return object
     */
    public static function getPluginReference()
    {
        if (!self::$plugin_reference) {
            self::$plugin_reference = wa()->getPlugin('quickeditor');
        }

        return self::$plugin_reference;
    }

    /**
     * Get plugin settings.
     *
     * @return array Plugin settings
     */
    public function getAllPluginSettings()
    {
        $default_settings = self::getDefaultSettings();
        $plugin_settings = $this->getSettings();
        if (!is_array($plugin_settings)) {
            $plugin_settings = array();
        }
        foreach ($plugin_settings as $settings_key => $settings_value) {
            if (!array_key_exists($settings_key, $default_settings)) {
                unset($plugin_settings[$settings_key]);
            }
        }
        $plugin_settings['plugin_static_url'] = $this->getPluginStaticUrl(false);
        $plugin_settings['wa_backend_url'] = wa_backend_url();

        return array_merge($default_settings, $plugin_settings);
    }

    /**
     * Get gefault plugin settings.
     *
     * @return array Default plugin settings
     */
    public static function getDefaultSettings()
    {
        return array(
            'enable_plugin' => false,
            'frontend_head_hook' => true,
            'location_on_product' => 'right',
            'always_edit_page' => true,
            'tab_window' => false,
            'show_description' => false,
            'category_link_location' => 'right',
            'page_link_location' => 'right',
            'quick_access_location' => 'right',
            'save_and_close' => false,
            'show_buttons_title' => true,
        );
    }

    /**
     * Getting links to the scripts.
     *
     * @return string HTML-code
     */
    public static function getScripts()
    {
        $quickeditor = self::getPluginReference();
        $settings = $quickeditor->getAllPluginSettings();
        if ($quickeditor->getRights() && $settings['enable_plugin']) {
            $settings = self::forceIntToBool($settings);
            $strings_arr = self::getStrings();
            if ($settings['page_link_location']
                && $settings['page_link_location'] != 'hidden'
                && waRequest::param('action', 'default') == 'page'
            ) {
                $settings['page_id'] = waRequest::param('page_id', '0');
            }
            $head = "\n<!-- QuickEditor plugin -->\n";
            $head .= '<link href="'.$quickeditor->getPluginStaticUrl(false).'css/quickeditor.css" rel="stylesheet" type="text/css">';
            $head .= '<script type="text/javascript" src="'.$quickeditor->getPluginStaticUrl(false).'js/quickeditor.min.js"></script>';
            $head .= '<script type="text/javascript">$(function(){$.QuickEditor.init('.json_encode($settings).','.json_encode($strings_arr).');});</script>';
            $head .= "\n<!-- QuickEditor plugin -->\n";

            return $head;
        }
    }

    public static function getStrings()
    {
        return array(
                'str_save_update' => _wp('Save and update'),
                'str_save_and_close' => _wp('Save and close'),
                'str_edit_page' => _wp('Edit page'),
                'str_quick_access' => _wp('Quick access'),
                'str_settings' => _wp('Settings'),
                'str_plugins' => _wp('Plugins'),
                'str_orders' => _wp('Qrders'),
                'str_products' => _wp('Products'),
                'str_customers' => _wp('Customers'),
                'str_reports' => _wp('Reports'),
                'str_storefronts' => _wp('Storefronts'),
            );
    }

    /**
     * Hook: frontend_head.
     *
     * @return string HTML-code
     */
    public function frontendHead()
    {
        $settings = $this->getAllPluginSettings();
        if ($this->getRights() && $settings['frontend_head_hook']) {
            return self::getScripts();
        }
    }

    /**
     * Hook: frontend_product.
     *
     * @param object $product shopProduct
     *
     * @return array HTML-code
     */
    public function frontendProduct($product)
    {
        $settings = $this->getAllPluginSettings();
        if ($this->getRights() && $settings['enable_plugin'] && $settings['location_on_product']) {
            $location_on_product = $settings['location_on_product'];
            $output_arr = array();
            $view = wa()->getView();
            $view->assign('product_id', $product['id']);
            $view->assign('product_name', $product['name']);
            $view->assign('location', $location_on_product);
            if ($location_on_product == 'left' || $location_on_product == 'right') {
                $output_arr = array('block' => $view->fetch(
                $this->getPath().
                    'QuickeditorProductLink.html'
                ));
            } else {
                $output_arr = array($location_on_product => $this->show($product['id'], true));
            }

            return $output_arr;
        }
    }

    /**
     * Hook: frontend_category.
     *
     * @param array $category Data of category
     *
     * @return string HTML-code
     */
    public function frontendCategory($category)
    {
        $settings = $this->getAllPluginSettings();
        if ($this->getRights() && $settings['enable_plugin']
            && $settings['category_link_location']
            && $settings['category_link_location'] != 'hidden'
        ) {
            $view = wa()->getView();
            $view->assign('category_id', $category['id']);
            $view->assign('location', $settings['category_link_location']);
            $view->assign('category_name', $category['name']);

            return $view->fetch($this->getPath().'QuickeditorCategoryLink.html');
        }
    }

    /**
     * Converting numeric string to boolean type.
     *
     * @param type $settings
     *
     * @return type
     */
    private static function forceIntToBool($settings = array())
    {
        foreach ($settings as $settings_name => $settings_value) {
            if (is_numeric($settings_value)) {
                $settings[$settings_name] = (bool) $settings_value;
            }
        }

        return $settings;
    }

    /**
     * Displaying the plugin.
     *
     * @param int  $product_id      Prouct ID
     * @param bool $is_product_page Flag for switch between display and fetch
     *
     * @return string HTML-code
     */
    public static function show($product_id = 0, $is_product_page = false)
    {
        $quickeditor = self::getPluginReference();
        $settings = $quickeditor->getAllPluginSettings();
        if ($quickeditor->getRights() && $settings['enable_plugin']) {
            $view = wa()->getView();
            $view->assign('product_id', (int) $product_id);
            $view->assign('is_product_page', $is_product_page);
            $view->assign('settings', $settings);
            if ($is_product_page) {
                return $view->fetch($quickeditor->getPath().'QuickeditorDefault.html');
            } else {
                $view->display($quickeditor->getPath().'QuickeditorDefault.html');
            }
        }
    }

    /**
     * Full path to plugin.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path.DIRECTORY_SEPARATOR.'templates'.
                DIRECTORY_SEPARATOR.'actions'.
                DIRECTORY_SEPARATOR.'quickeditor'.DIRECTORY_SEPARATOR;
    }
}
