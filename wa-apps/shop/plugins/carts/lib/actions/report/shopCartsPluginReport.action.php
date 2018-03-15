<?php


class shopCartsPluginReportAction extends waViewAction
{

    public function execute()
    {
        $u = $this->getUser();

        if (!($u->isAdmin('shop') || $u->getRights('shop', 'carts_plugin.%'))) {
            throw new waRightsException(_w("Access denied"));
        }


        $this->getResponse()->setTitle(_w('Reports'));

        $l = new shopBackendLayout();
        $l->assign('no_level2', true);
        $this->setLayout($l);

        $this->view->assign('lang', substr(wa()->getLocale(), 0, 2));



        $this->view->assign('rights', array(
            'contacts_report' => $u->getRights('shop', 'carts_plugin.contacts_report'),
            'usage_settings' => $u->getRights('shop', 'carts_plugin.usage_settings')
        ));
    }

}