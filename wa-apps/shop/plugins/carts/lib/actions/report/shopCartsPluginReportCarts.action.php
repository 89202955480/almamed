<?php

class shopCartsPluginReportCartsAction extends waViewAction
{

    public function preExecute()
    {
        $u = $this->getUser();

        if (!($u->isAdmin('shop') || $u->getRights('shop', 'carts_plugin.contacts_report'))) {
            throw new waRightsException(_w("Access denied"));
        }
    }

    public function  execute()
    {
        /**
         * @todo
         */
        $on_page = 25;
        $all = waRequest::get('all', 0, waRequest::TYPE_INT);

        $start = microtime(true);

        $model = new shopCartsPluginStorefrontModel();
        $where = $this->getTimeQuery();

        $page = waRequest::get('page', 1, waRequest::TYPE_INT);
        if($page < 1) $page = 1;
        $offset = ($page - 1) * $on_page;

        $data = $model->getReportData($where, $offset, $on_page, $all);

        $pages_total = ceil($data['total'] / $on_page);

        $this->view->assign(array(
            'data' => $data,
            'pages_total' => $pages_total,
            'generated' => microtime(true)-$start,
            'all' => $all,
            'lang' => substr(wa()->getLocale(), 0, 2)
        ));

        $this->getMemoryUsageInfo();
    }

    private function getTimeQuery()
    {
        $days = waRequest::get('timeframe');

        if(($days == 'custom') && waRequest::get('from') && waRequest::get('to')) {
            $from = date('Y-m-d 00:00:00', waRequest::get('from'));
            $to = date('Y-m-d 23:59:59', waRequest::get('to'));
            $where = 'edit_datetime BETWEEN \''.$from. '\' AND \''.$to."'";
        } elseif((int)$days) {
            $where = 'edit_datetime > (NOW() - interval '.((int)$days).' day)';
        } else {
            $where = '1';
        }

        return $where;
    }

    /**
     * Проблема использования памяти возникла у одного из клиентов.
     * Если так нельзя делать, могу убрать это из отчёта.
     */
    private function getMemoryUsageInfo()
    {
        $db_config = wa()->getConfigPath().'/db.php';
        if(!file_exists($db_config))
            return;

        $db = include $db_config;
        if(empty($db['default']) || empty($db['default']['database']))
            return;
        $db = $db['default']['database'];
        try {
            $model = new waModel();
            $info = $model->query('SELECT table_name AS "table", (data_length + index_length) "size" FROM information_schema.TABLES WHERE table_schema = ? AND table_name LIKE "shop_carts_plugin%"', $db)->fetchAll('table', true);

            $memory = $info['shop_carts_plugin_log'] + $info['shop_carts_plugin_storefront'] + $info['shop_carts_plugin_contact'];
            $memory = waFiles::formatSize($memory, '%0.2f', _wp('Bytes,KBytes,MBytes,GBytes'));
            $this->view->assign('memory', $memory);
        } catch(waDbException $e) {
            // ну и ладно.
        }
    }
}