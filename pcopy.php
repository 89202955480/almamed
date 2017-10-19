<?php
//mb_internal_encoding("UTF-8");
//phpinfo();
//$db = include('/wa-config/db.php');
//var_dump($db);
//anoskopy-welch-allyn-ssha
if(!empty($_POST['url_post_product_copy_btn']) and !empty($_POST['url_post_product_copy'])) {
    $url = trim(strip_tags($_POST['url_post_product_copy']));

    $mysqli = new mysqli('localhost', 'almamed_1', 'pbel7PSt44', 'almamed_1');
	$mysqli->set_charset("utf8");
	
	if ($mysqli->connect_errno) {
		printf("Соединение не удалось: %s\n", $mysqli->connect_error);
		exit();
	}

    $query = "SELECT * FROM `shop_category` WHERE `url` LIKE '%$url%'";

    if ($result = $mysqli->query($query)) {
        $arCategoryId = array();
        $arCategoryName = array();
        $arCategoryFullUrl = array();
        while ($row = $result->fetch_assoc()) {
			//var_dump($row);
            $arCategoryId[] = $row['id'];
            $arCategoryName[] = $row['name'];
            $arCategoryFullUrl[] = $row['full_url'];
        }
    }

    foreach ($arCategoryId as $id) {
        $queryProduct = "SELECT * FROM `shop_category_products` WHERE `category_id` = '$id'";

        $result = $mysqli->query($queryProduct);
        if ($result->num_rows >= 1) {
            $arIdProduct = array();
            while ($row = $result->fetch_assoc()) {
                $arIdProduct[] = $row['product_id'];
            }
        }
    }
	



    $countProd = count($arIdProduct);

    foreach ($arCategoryId as $key => $id) {
        $Product = "SELECT * FROM `shop_category_products` WHERE `category_id` = '$id'";
        $result = $mysqli->query($Product);
        if ($result->num_rows == 0) {
            foreach ($arIdProduct as $idProd) {
                $insert = "INSERT INTO `shop_category_products` (`product_id`, `category_id`, `sort`) VALUES ('$idProd', '$id', '0')";
                $mysqli->query($insert);
            }
            $updateCat = "UPDATE `shop_category` SET `count` = '$countProd' WHERE `id` = '$id'";
            // var_dump($updateCat);
            $mysqli->query($updateCat);

            print 'ID:' . $id . ' Товары добавлены в категорию: <a href="/webasyst/shop/?action=products#/products/category_id='.$id.'&view=table&sort=sort&order=asc">' . $arCategoryName[$key] . '</a><br>';
        }
    }

//var_dump($arIdProduct);
}
?>

<form method="post" action="">
    <input type="text" name="url_post_product_copy" value="">
    <input type="submit" name="url_post_product_copy_btn" value="OK">
</form>


