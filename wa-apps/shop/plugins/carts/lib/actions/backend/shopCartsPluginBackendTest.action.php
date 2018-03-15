<?php


class shopCartsPluginBackendTestAction extends waViewAction {

    public function execute()
    {
        $model = new shopCartItemsModel();
        $csm = new shopCartsPluginStorefrontModel();

        $codes = $model->select('DISTINCT code')
            ->where('type="product"')
            ->order('create_datetime DESC')
            ->limit('10')
            ->fetchAll(null,true);

        $carts = array();
        foreach($codes as $code) {
            $items = $model->query('SELECT c.code, p.name, s.name sku, c.quantity FROM shop_cart_items c
                LEFT JOIN shop_product p ON p.id=c.product_id
                LEFT JOIN shop_product_skus s ON s.id=c.sku_id
                WHERE c.type="product" AND c.code = ?', $code)->fetchAll();

            $storefront = $csm->getStorefrontByCode($code);

            $carts[] = array(
                'code' => $code,
                'items' => $items,
                'storefront' => $storefront
            );
        }

        $this->view->assign('test_carts', $carts);
    }
}