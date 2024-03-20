<?php 

require_once __DIR__. "/config/dbh.php";
require_once __DIR__. "/public/product.classes.php";
require_once __DIR__. "/public/product.contr.php";

$is_product = 0;
$rows = new ProductList($is_product);
$rows = $rows->displayProducts2();

if (isset($_POST['suggestion'])) {
    $name = $_POST['suggestion'];

    if (!empty($name)) {
        foreach($rows as $row){
            $productName = $row['product_name'];
            $id = $row['id'];

            if (strpos($productName, $name) !== false) {
                echo "<a href='single-product.php?id=$id' class='text-danger'>$productName</a>";
                echo "<br>";
            }
        }
    }
}