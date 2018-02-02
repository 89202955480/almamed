<?php

Class shopXmlPlugin extends shopPlugin {

    protected $table = 'shop_category';

    protected $left = 'left_key';

    const TYPE_STATIC = 1;



    public function backendMenuExport()
    {
        return array('core_li'  => '<li class="no-tab"><a href="?plugin=xml&action=edit ">Экспорт Xml для Битрикс</a></li>');
    }

    public function indexBrand($brands,$path){
        $brand = new shopProductbrandsPlugin();
        $self = new waNestedSetModel();


        $category = $this->getFullTree('',true);

        $cat_tree = array();
        $prod_tree = array();
        $cat_product = array();
        foreach($category as $k => $cat){
            //$cat_tree[$cat['parent_id']][] = $cat;
            $collection = new shopProductsCollection("category/" . $cat['id']);
            $product = $collection->getProducts();
            if ($product) {
                foreach ($product as $key_prod => $prod) {

                    $idb = $brand->productBrand($prod['id']);

                    if(in_array($idb['id'],$brands)){
                        $prod_tree[$key_prod] = $prod;
                        $sql = "SELECT * FROM shop_category_products WHERE product_id = " . $prod['id'];
                        $cat_ar = $self->query($sql)->fetchAll();
                        $prod_tree[$key_prod]['id_category'] = $cat_ar;
                        foreach($cat_ar as $c){
                            $cat_product[$c['category_id']] = $c;
                        }

                    }
                }
            }
        }


        foreach($cat_product as $id){
            $category_prod = explode(',',$this->recursive_prod_parent_cat($id['category_id']));
            foreach($category_prod as $id_cat){
                $sql = "SELECT * FROM shop_category WHERE id = " . $id_cat;
                $cat_ar = $self->query($sql)->fetchAll();
                $cat_tree[$cat_ar[0]['parent_id']][$cat_ar[0]['id']] = $cat_ar[0];
            }
        }




        $this->saveXml($this->create_tree($cat_tree,0),$this->create_product($prod_tree),$path);

        return true;

    }


    public function recursive_prod_parent_cat($id_cat){

            $arr = '';
            $self = new waNestedSetModel();

            $sql = "SELECT * FROM shop_category WHERE id = " . $id_cat;
            $cat_ar = $self->query($sql)->fetch();

            if($cat_ar['parent_id'] > 0){
                $arr .= $cat_ar['id'].',';
                $arr .= $this->recursive_prod_parent_cat($cat_ar['parent_id']);
            }else{
                $arr .= $id_cat;
            }

        return $arr;
    }


    public function indexCat($cat,$path)
    {
        //получаем категории которые нужно убрать.

        $cat_tree = array();
        $prod_tree = array();

        $category = $this->getFullTree('',true,$cat);

        foreach($category as $k => $cat){
            $cat_tree[$cat['parent_id']][] = $cat;
        }

        $products_cat = substr($this->clear_tree($cat_tree,0), 0, -1);
        foreach(explode(',',$products_cat) as $cat){
            $self = new waNestedSetModel();
            $collection = new shopProductsCollection("category/" . $cat);
            $product = $collection->getProducts();
            if ($product) {
                foreach ($product as $key_prod => $prod) {
                    $prod_tree[$key_prod] = $prod;
                    $sql = "SELECT * FROM shop_category_products WHERE product_id = " . $prod['id'];
                    $cat_ar = $self->query($sql)->fetchAll();
                    $prod_tree[$key_prod]['id_category'] = $cat_ar;
                }
            }
        }

        $this->saveXml($this->create_tree($cat_tree,0),$this->create_product($prod_tree),$path);

        return true;
    }

    public function clear_tree($cats,$parent_id){

        if(is_array($cats) and  isset($cats[$parent_id])){
          $id = '';
            foreach($cats[$parent_id] as $cat){
                $id .= $cat['id'];
                $id .= ",";
                $id .= $this->clear_tree($cats,$cat['id']);
            }
        }
        else return null;
        return $id;
    }


    public function getFullTree($fields = '', $status = true, $select = array(),$parent = false)
    {
        $self = new waNestedSetModel();

        if (!$fields) {
            $fields = 'id, left_key, right_key, parent_id, depth, name, count, type, status';
        }
        if($select){
            $del = '';
            foreach($select as $sel){
                $del .= 'AND id != ' . $sel.' ';
            }
        }

        if($parent){
            $parent = ' AND parent_id = 0 ';
        }

        $fields = $self->escape($fields);

        $where = $status ? 'WHERE status='.self::TYPE_STATIC : '';
        $sql = "SELECT $fields FROM {$this->table} $where $del $parent ORDER BY {$this->left}";
        return $self->query($sql)->fetchAll('id');
    }


    public function create_tree($cats,$parent_id){

        if(is_array($cats) and  isset($cats[$parent_id])){

            $tree = '<Группы>';
            foreach($cats[$parent_id] as $cat){

                $tree .= "<Группа>";
                $tree .= "<Ид>".$cat['id']."</Ид>";
                $tree .= "<НомерВерсии>123</НомерВерсии>";
                $tree .= "<ПометкаУдаления>false</ПометкаУдаления>";
                $tree .= "<Наименование>".$this->xmlEscape($cat['name'])."</Наименование>";
                $tree .=  $this->create_tree($cats,$cat['id']);
                $tree .= '</Группа>';
            }

            $tree .= '</Группы>';

        }
        else return null;


        return $tree;
    }


    public function create_product($product){

        $tree = '<Товары>';
        foreach($product as $prod){
            $tree .= '<Товар>';

            $tree .= '<Ид>'.$prod['id'].'</Ид>';
            $tree .= '<ПометкаУдаления>false</ПометкаУдаления>';
            $tree .= '<Наименование>'.$this->xmlEscape($prod['name']).'</Наименование>';
            $tree .= '<Группы>';
            foreach($prod['id_category'] as $cat){
                $tree .= '<Ид>'.$cat['category_id'].'</Ид>';
            }
            $tree .= '</Группы>';


            $tree .= '</Товар>';
        }

        $tree .= '</Товары>';

        return $tree;

    }


    public function saveXml($cat,$prod,$path){

        $tree = '<?xml version="1.0" encoding="UTF-8"?>';
        $tree .= '<КоммерческаяИнформация ВерсияСхемы="3.1" ДатаФормирования="2017-12-06T16:04:37">';
        $tree .= '<Классификатор СодержитТолькоИзменения="true">';
        $tree .= '<Ид>4c51910a-f6e7-4f39-8d18-3a2c9d0291ed</Ид>';
        $tree .= '<Наименование>Основной каталог товаров</Наименование>';

        $tree .= $cat;

        $tree .= '</Классификатор>';

        $tree .= '<Каталог СодержитТолькоИзменения="true">';
		$tree .= '<Ид>4c51910a-f6e7-4f39-8d18-3a2c9d0291ed</Ид>';
        $tree .= '<ИдКлассификатора>4c51910a-f6e7-4f39-8d18-3a2c9d0291ed</ИдКлассификатора>';
		$tree .= '<Наименование>Основной каталог товаров</Наименование>';

        $tree .= $prod;

        $tree .= '<Описание>Основной каталог товаров</Описание>';
	    $tree .= '</Каталог>';

        $tree .= '</КоммерческаяИнформация>';
        if($path){
            file_put_contents($path, $tree);
        }else{
            file_put_contents($_SERVER['DOCUMENT_ROOT'].'/import.xml', $tree);
        }

    }

    public function xmlEscape($string) {
        return str_replace(array('&', '<', '>', '\'', '"'), array('&amp;', '&lt;', '&gt;', '&apos;', '&quot;'), $string);
    }





}