<?php

class shopQuickeditorPluginBackendSaveController extends waJsonController
{
    public function execute()
    {
        try {
            $settings = array(
                'enable_plugin' => (bool) waRequest::post('enable_plugin', 0, waRequest::TYPE_INT),
                'frontend_head_hook' => (bool) waRequest::post('frontend_head_hook', 0, waRequest::TYPE_INT),
                'always_edit_page' => (bool) waRequest::post('always_edit_page', 0, waRequest::TYPE_INT),
                'tab_window' => (bool) waRequest::post('tab_window', 0, waRequest::TYPE_INT),
                'show_description' => (bool) waRequest::post('show_description', 0, waRequest::TYPE_INT),
                'location_on_product' => waRequest::post('location_on_product', 'right', waRequest::TYPE_STRING),
                'category_link_location' => waRequest::post('category_link_location', 'right', waRequest::TYPE_STRING),
                'page_link_location' => waRequest::post('page_link_location', 'right', waRequest::TYPE_STRING),
                'quick_access_location' => waRequest::post('quick_access_location', 'right', waRequest::TYPE_STRING),
                'save_and_close' => (bool) waRequest::post('save_and_close', 0, waRequest::TYPE_INT),
                'show_buttons_title' => (bool) waRequest::post('show_buttons_title', 0, waRequest::TYPE_INT),
            );

            if (!preg_match('/^(block|block_aux|menu|cart|left|right|hidden)$/', $settings['location_on_product'])
                || !preg_match('/^(left|right|hidden)$/', $settings['category_link_location'])
                || !preg_match('/^(left|right|hidden)$/', $settings['page_link_location'])
            ) {
                throw new waException(_wp('Please enter a valid plugin parameters'));
            }

            wa()->getPlugin('quickeditor')->saveSettings($settings);
            $this->response['message'] = _wp('Saved');
        } catch (Exception $e) {
            $this->setError($e->getMessage());
        }
    }
}
