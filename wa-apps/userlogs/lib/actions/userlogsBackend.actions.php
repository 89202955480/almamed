<?php
class userlogsBackendActions extends waViewActions
{


    public function defaultAction()
    {

        if($this->getRights('delete')) {
            $delite_all_log = waRequest::get('delite-all-logs');
            if ($delite_all_log == 'yes') {
                $this->deleteAction();
            }
        }

        $carent_page = waRequest::get('page');
        if(empty($carent_page)){$carent_page = 1;}
        if(waRequest::get('rows')) {
            $this->getStorage()->write('rows', waRequest::get('rows'));
        }
        $rows_count = $this->getStorage()->read('rows');
        if(empty($rows_count)){
            $rows_count = 100;
        }
        $start = ($carent_page - 1) * $rows_count;
        $log_model = new waLogModel();
        $rows = $log_model->getLogsAll($rows_count,$start);
        $apps = wa()->getApps(true);
        $apps_rows = array();
        $prev = array();
        foreach ($rows as $row_id => &$row) {
            if ($prev) {
                $flag = true;
                foreach (array('app_id', 'action', 'contact_id', 'subject_contact_id', 'params') as $k) {
                    if ($prev[$k] != $row[$k]) {
                        $flag = false;
                        break;
                    }
                }
                if ($flag) {
                    unset($rows[$row_id]);
                    continue;
                }
            }
            $row['name'] = $row['contact_name'];
            $contact_name = waContactNameField::formatName($row);
            unset($row['name']);
            if ($contact_name) {
                $row['contact_name'] = $contact_name;
            }
            if ($row['is_user']) {
                $row['contact_photo_url'] = waContact::getPhotoUrl($row['contact_id'], $row['contact_photo'], 32, 32);
            }
            if (!empty($apps[$row['app_id']])) {
                $row['app'] = $apps[$row['app_id']];
                if (empty($apps_rows[$row['app_id']])) {
                    waLocale::loadByDomain($row['app_id']);
                }
                $logs = wa($row['app_id'])->getConfig()->getLogActions(true);
                $row['action_name'] = ifset($logs[$row['action']]['name'], $row['action']);
                if (strpos($row['action'], 'del')) {
                    $row['type'] = 4;
                } elseif (strpos($row['action'], 'add')) {
                    $row['type'] = 3;
                } else {
                    $row['type'] = 1;
                }
                $apps_rows[$row['app_id']][$row_id] = $row;
            } else {
                $row['app'] = array(
                    'name' => $row['app_id'],
                );
                $row['action_name'] = $row['action'];
                $row['type'] = 1;
            }

            $prev = $row;
            unset($row);
        }
        foreach ($apps_rows as $app_id => $app_rows) {
            $app_rows = wa($app_id)->getConfig()->explainLogs($app_rows);
            foreach ($app_rows as $row_id => $row) {
                if ($row) {
                    $rows[$row_id] = $row;
                } else {
                    unset($rows[$row_id]);
                }
            }
        }








        $num_page = ceil($log_model->getLogsCount()/$rows_count);

        // передаем записи в шаблон
        $this->view->assign('activity', $rows);
        $this->view->assign('count_page', $num_page);
        $this->view->assign('carent_page', $carent_page);
    }

    public function deleteAction()
    {
        $log_model = new waLogModel();
        $log_model->deliteLogAll();
    }
}