<?php

class shopCartsPluginCartProducts {

    /**
     * @param $code
     * @param $storefront
     * @return array
     */
    public function getByCode($code, $storefront)
    {
        $cart_model = new shopCartItemsModel();

        $items = $cart_model->where('code= ?', $code)->order('parent_id')->fetchAll('id');

        $product_ids = $sku_ids = array();
        foreach ($items as $item) {
            $product_ids[] = $item['product_id'];
            $sku_ids[] = $item['sku_id'];
        }

        $product_ids = array_unique($product_ids);
        $sku_ids = array_unique($sku_ids);

        $type_ids = $this->getTypeIds($items, $sku_ids, $product_ids);

        /**
         * @todo: wtf?!
         */
        list($service_ids, $type_services, $product_services, $sku_services) = $this->getServiceIds($type_ids, $product_ids, $sku_ids);


        $services = $this->getServices($service_ids);

        $items = $this->rearrangeItems($items, $services, $type_services, $product_services, $sku_services);

        $products = $this->getProductsFromItems($items, $total, $product_ids, false);

        return array(
            'items' => $items,
            'products' => $products,
            'total' => $total,
            'carts' => new shopCartsPluginViewHelper($code, $storefront),
        );
    }



    public function getForBackend($code)
    {
        $cart_model = new shopCartItemsModel();

        $items = $cart_model->where('code= ?', $code)->order('parent_id')->fetchAll('id');

        $product_ids = $sku_ids = array();
        foreach ($items as $item) {
            $product_ids[] = $item['product_id'];
            $sku_ids[] = $item['sku_id'];
        }

        $product_ids = array_unique($product_ids);
        $sku_ids = array_unique($sku_ids);

        $type_ids = $this->getTypeIds($items, $sku_ids, $product_ids);

        /**
         * @todo: wtf?!
         */
        list($service_ids, $type_services, $product_services, $sku_services) = $this->getServiceIds($type_ids, $product_ids, $sku_ids);


        $services = $this->getServices($service_ids);

        $items = $this->rearrangeItems($items, $services, $type_services, $product_services, $sku_services);

        $products = $this->getProductsFromItems($items, $total, $product_ids, true);

        return array(
            'items' => $items,
            'total' => $total,
        );
    }

    /**
     * @param $items
     * @param $total
     * @param $product_ids
     * @param $is_backend
     * @return array
     */
    private function getProductsFromItems(&$items, &$total, $product_ids, $is_backend = false)
    {
        $products = array();
        $total = 0;

        $all_skus = array();
        if($is_backend) {
            if ($is_backend) {
                $model = new shopProductSkusModel();
                $skus = $model->getByField('product_id', $product_ids, true);
                foreach($skus as $sku) {
                    $all_skus[$sku['product_id']][$sku['id']] = $sku;
                }
                unset($skus);
            }
        }
        foreach ($items as $item_id => $item) {
            if(ifempty($item['quantity'], 0) < 1) {
                unset($items[$item_id]);
                continue;
            }

            $price = shop_currency($item['price'] * $item['quantity'], $item['currency'], null, false);
            $services = array();
            if (isset($item['services'])) {
                foreach ($item['services'] as $s) {
                    if ($is_backend || !empty($s['id'])) {
                        if (isset($s['variants'])) {
                            $price += shop_currency($s['variants'][$s['variant_id']]['price'] * $item['quantity'], $s['currency'], null, false);
                        } elseif(!empty($s['price'])) {
                            $price += shop_currency($s['price'] * $item['quantity'], $s['currency'], null, false);
                        }
                        if(!empty($s['id'])) {
                            $s['checked'] = true;
                        }
                        $services[$s['variant_id']] = $s;
                    }
                }
            }

            $items[$item_id]['full_price'] = $price / $item['quantity'];
            $total += $price;
            $items[$item_id]['services'] = $services;
            if($is_backend) $items[$item_id]['skus'] = ifempty($all_skus[$items[$item_id]['product']['id']], array());
            $product = $item['product'];
            $product['sku_name'] = $item['sku_name'];
            $product['sku_code'] = $item['sku_code'];
            $product['quantity'] = $item['quantity'];
            $product['services'] = $services;
            $products[] = $product;
        }

        return $products;
    }

    /**
     * @param $items
     * @param $services
     * @param $type_services
     * @param $product_services
     * @param $sku_services
     * @return array
     */
    private function rearrangeItems($items, $services, $type_services, $product_services, $sku_services)
    {
        foreach ($items as $item_id => $item) {
            if ($item['type'] == 'product') {
                $p = $item['product'];
                $item_services = array();
                // services from type settings
                if (isset($type_services[$p['type_id']])) {
                    foreach ($type_services[$p['type_id']] as $service_id => &$s) {
                        $item_services[$service_id] = $services[$service_id];
                    }
                }

                // services from product settings
                if (isset($product_services[$item['product_id']])) {
                    foreach ($product_services[$item['product_id']] as $service_id => $s) {
                        if (!isset($s['status']) || $s['status']) {
                            if (!isset($item_services[$service_id])) {
                                $item_services[$service_id] = $services[$service_id];
                            }
                            // update variants
                            foreach ($s['variants'] as $variant_id => $v) {
                                if ($v['status']) {
                                    if ($v['price'] !== null) {
                                        $item_services[$service_id]['variants'][$variant_id]['price'] = $v['price'];
                                    }
                                } else {
                                    unset($item_services[$service_id]['variants'][$variant_id]);
                                }
                            }
                        } elseif (isset($item_services[$service_id])) {
                            // remove disabled service
                            unset($item_services[$service_id]);
                        }
                    }
                }
                // services from sku settings
                if (isset($sku_services[$item['sku_id']])) {
                    foreach ($sku_services[$item['sku_id']] as $service_id => $s) {
                        if (!isset($s['status']) || $s['status']) {
                            // update variants
                            foreach ($s['variants'] as $variant_id => $v) {
                                if ($v['status']) {
                                    if ($v['price'] !== null) {
                                        $item_services[$service_id]['variants'][$variant_id]['price'] = $v['price'];
                                    }
                                } else {
                                    unset($item_services[$service_id]['variants'][$variant_id]);
                                }
                            }
                        } elseif (isset($item_services[$service_id])) {
                            // remove disabled service
                            unset($item_services[$service_id]);
                        }
                    }
                }
                foreach ($item_services as $s_id => &$s) {
                    if (!$s['variants']) {
                        unset($item_services[$s_id]);
                        continue;
                    }

                    if ($s['currency'] == '%') {
                        foreach ($s['variants'] as $v_id => $v) {
                            $s['variants'][$v_id]['price'] = $v['price'] * $item['price'] / 100;
                        }
                        $s['currency'] = $item['currency'];
                    }

                    if (count($s['variants']) == 1) {
                        $v = reset($s['variants']);
                        $s['price'] = $v['price'];
                        //unset($s['variants']);
                    }
                }
                unset($s);
                uasort($item_services, array('shopServiceModel', 'sortServices'));

                $items[$item_id]['services'] = $item_services;
            } else {
                $items[$item['parent_id']]['services'][$item['service_id']]['id'] = $item['id'];
                if (isset($item['service_variant_id'])) {
                    $items[$item['parent_id']]['services'][$item['service_id']]['variant_id'] = $item['service_variant_id'];
                }
                unset($items[$item_id]);
            }
        }
        return $items;
    }

    /**
     * @param $items
     * @param $sku_ids
     * @param $product_ids
     * @return array
     */
    private function getTypeIds(&$items, $sku_ids, $product_ids)
    {
        $product_model = new shopProductModel();
        $sku_model = new shopProductSkusModel();
        $image_model = new shopProductImagesModel();


        /**
         * @todo: $products = $product_model->getWithCategoryUrl($product_ids);
         * $products = $product_model->getById($product_ids);
         */
        $products = $product_model->getWithCategoryUrl($product_ids);
        $skus = $sku_model->getByField('id', $sku_ids, 'id');

        $type_ids = array();
        foreach ($items as $item_id => &$item) {
            if (!isset($skus[$item['sku_id']])) {
                unset($items[$item_id]);
                continue;
            }
            if ($item['type'] == 'product') {
                $item['product'] = $products[$item['product_id']];
                $sku = $skus[$item['sku_id']];
                if ($sku['image_id'] && $sku['image_id'] != $item['product']['image_id']) {
                    $img = $image_model->getById($sku['image_id']);
                    if ($img) {
                        $item['product']['image_id'] = $sku['image_id'];
                        $item['product']['ext'] = $img['ext'];
                    }
                }
                $item['sku_name'] = $sku['name'];
                $item['sku_code'] = $sku['sku'];
                $item['price'] = $sku['price'];
                $item['currency'] = $item['product']['currency'];
                $type_ids[] = $item['product']['type_id'];
            }
        }

        return array_unique($type_ids);
    }

    /**
     * @param $type_ids
     * @param $product_ids
     * @param $sku_ids
     * @return array
     */
    private function getServiceIds($type_ids, $product_ids, $sku_ids)
    {
        $service_ids = array();
        $type_services_model = new shopTypeServicesModel();
        $rows = $type_services_model->getByField('type_id', $type_ids, true);
        $type_services = array();
        foreach ($rows as $row) {
            $service_ids[] = $row['service_id'];
            $type_services[$row['type_id']][$row['service_id']] = true;
        }

        // get services for all products
        $product_services_model = new shopProductServicesModel();
        $rows = $product_services_model->getByProducts($product_ids);

        $product_services = $sku_services = array();
        foreach ($rows as $row) {
            if ($row['sku_id'] && !in_array($row['sku_id'], $sku_ids)) {
                continue;
            }
            $service_ids[] = $row['service_id'];
            if (!$row['sku_id']) {
                $product_services[$row['product_id']][$row['service_id']]['variants'][$row['service_variant_id']] = $row;
            }
            if ($row['sku_id']) {
                $sku_services[$row['sku_id']][$row['service_id']]['variants'][$row['service_variant_id']] = $row;
            }
        }

        $service_ids = array_unique($service_ids);
        return array($service_ids, $type_services, $product_services, $sku_services);
    }

    /**
     * @param $service_ids
     * @return array
     */
    private function getServices($service_ids)
    {
        $service_model = new shopServiceModel();
        $variant_model = new shopServiceVariantsModel();
        $services = $service_model->getByField('id', $service_ids, 'id');
        foreach ($services as &$s) {
            unset($s['id']);
        }
        unset($s);

        $rows = $variant_model->getByField('service_id', $service_ids, true);
        foreach ($rows as $row) {
            $services[$row['service_id']]['variants'][$row['id']] = $row;
            unset($services[$row['service_id']]['variants'][$row['id']]['id']);
        }
        return $services;
    }
}