<?php

class shopQuickeditorPluginSettingsAction extends waViewAction
{
    public function execute()
    {
        $settings = wa()->getPlugin('quickeditor')->getAllPluginSettings();
        foreach ($settings as $settings_name => $settings_value) {
            $this->view->assign($settings_name, $settings_value);
        }
    }
}
