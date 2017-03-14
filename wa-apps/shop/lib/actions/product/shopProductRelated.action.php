<?php

class shopProductRelatedAction extends waViewAction
{
    public function execute()
    {
        $product_id = (int)waRequest::get('id');
        $product = new shopProduct($product_id);

        $type_model = new shopTypeModel();
        $type = $type_model->getById($product['type_id']);





        if ($product['cross_selling'] === null) {
            $product['cross_selling'] = $type['cross_selling'] ? 1 : 0;
        }

        if ($product['upselling'] === null) {
            $product['upselling'] = $type['upselling'];
        }

        if ($product['user_value_related'] === null) {
            $product['user_value_related'] = $type['user_value_related'] ? 1 : 0;
        }
        if ($product['user_value_related_two'] === null) {
            $product['user_value_related_two'] = $type['user_value_related_two'] ? 1 : 0;
        }
        if ($product['user_value_related_three'] === null) {
            $product['user_value_related_three'] = $type['user_value_related_three'] ? 1 : 0;
        }
        if ($product['user_value_related_four'] === null) {
            $product['user_value_related_four'] = $type['user_value_related_four'] ? 1 : 0;
        }
        if ($product['user_value_related_five'] === null) {
            $product['user_value_related_five'] = $type['user_value_related_five'] ? 1 : 0;
        }

        // if manually
        if ($product['cross_selling'] == 2 ||
            $product['upselling'] == 2 ||
            $product['user_value_related'] == 2 ||
            $product['user_value_related_two'] == 2 ||
            $product['user_value_related_three'] == 2 ||
            $product['user_value_related_four'] == 2 ||
            $product['user_value_related_five'] == 2
        ) {
            $related_model = new shopProductRelatedModel();
            $related = $related_model->getAllRelated($product_id);
        } else {
            $related = array();
        }

        if ($type['upselling']) {
            $type_upselling_model = new shopTypeUpsellingModel();
            $data = $type_upselling_model->getByType($type['id']);
            $type['upselling_html'] = shopSettingsRecommendationsAction::getConditionHTML($data);
        }

        if ($type['cross_selling'] && substr($type['cross_selling'], 0, 9) == 'category/') {
            $category_model = new shopCategoryModel();
            $type['category'] = $category_model->getById(substr($type['cross_selling'], 9));
        }

        $title1 = waConfig::get('title_name_related_one');



        $this->view->assign(array(
            'type' => $type,
            'product' => $product,
            'related' => $related,
            'title1' => $title1
        ));

        /**
         * @event backend_product_edit
         * @return array[string][string]string $return[%plugin_id%]['related'] html output
         */
        $this->view->assign('backend_product_edit', wa()->event('backend_product_edit', $product));
    }
}