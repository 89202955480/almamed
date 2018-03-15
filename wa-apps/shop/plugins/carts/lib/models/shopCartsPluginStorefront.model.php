<?php

class shopCartsPluginStorefrontModel extends waModel {

    protected $table = 'shop_carts_plugin_storefront';
    protected $id = 'code';

    public function getStorefrontByCode($code)
    {
        return $this->select('storefront')->where('code = ?', $code)->fetchField();
    }

    public function getContactIdsByRange($from, $to)
    {
        return $this->select('code, contact_id')
            ->where('cancel = 0 AND order_id IS NULL AND edit_datetime BETWEEN ? AND ?', $from, $to)
            ->fetchAll('code', true);
    }

    public function getContactByCode($code)
    {
        $contact_id = $this->select('contact_id')->where('code=?',$code)->fetchField();

        if($contact_id) {
            return new shopCartsPluginCustomer($contact_id);
        } else {
            $ccm = new shopCartsPluginContactModel();
            return $ccm->getContactByCode($code);
        }
    }


    public function getReportData($where, $offset, $on_page, $all = false)
    {
        $sql = ' FROM '.$this->getTableName().' s ';
        if(!$all) {
            $sql .= 'LEFT JOIN shop_carts_plugin_contact c ON c.code = s.code '.
                'WHERE '.$where.' AND (c.contact_id IS NOT NULL OR s.contact_id IS NOT NULL OR c.contact IS NOT NULL) ';
        } else {
            $sql .= 'WHERE '.$where.' ';
        }

        $data = $this->query('SELECT s.*'.$sql.'ORDER BY edit_datetime DESC LIMIT '.$offset.','.$on_page)->fetchAll('code');
        $codes = array_keys($data);

        if(!empty($codes)) {
            $ccm = new shopCartsPluginContactModel();
            $ccp = new shopCartsPluginCartProducts();

            foreach($data as &$d) {
                if($d['contact_id']) {
                    try {
                        $d['contact'] = new shopCartsPluginCustomer($d['contact_id']);
                        $d['contact']->load();
                    } catch (Exception $e) {
                        // dummy contact if not exists
                        $d['contact'] = new shopCartsPluginCustomer();
                        $d['contact']->set('firstname', _wp('Contact'));
                        $d['contact']->set('lastname', _wp('Removed'));

                        $this->updateById($d['code'], array('contact_id' => null));
                        $ccm->updateById($d['code'], array('contact_id' => null));
                        $d['contact_id'] = null;

                    }

                } else {
                    $d['contact'] = $ccm->getContactByCode($d['code']);
                }

                $items = $ccp->getByCode($d['code'], $d['storefront']);
                $d['total_products'] = count($items['items']);
                $d['total_price'] = $items['total'];
                //$d['total_products'] = $cim->select('COUNT(*)')->where('code = ? AND type="product"',$d['code'])->fetchField();
            }
        }

        $res = array();
        $res['items'] = $data;
        $res['total'] = $this->query('SELECT COUNT(*)'.$sql)->fetchField();
        return $res;
    }
}