<?php

require_once __DIR__ . "/config/dbh.php";
require_once __DIR__ . "/public/product.classes.php";
require_once __DIR__ . "/public/product.contr.php";

$is_product = 0;
$rows = new ProductList($is_product);
$rows = $rows->displayProducts2();

if (isset($_POST['suggestion'])) {
    $name = $_POST['suggestion'];

    if (!empty($name)) {
        foreach ($rows as $row) {
            $productName = $row['product_name'];
            $image = $row['product_image'];
            $id = $row['id'];

            if (strpos($productName, $name) !== false) {
                echo '<a href="single-product.php?id=$id" class="text-decoration-none bg-light d-flex" style="width:100%; height:100px;">
                    <div class="row mb-2 d-flex">
                    <div class="col-3 d-flex">
                         <img src="inc/uploads/'.$image.'" alt=""   style="width:200px; height:100px;">
                    </div>
                    <div class="col-9 text-dark d-flex align-item-center" style="font-size:1rem; display:flex; align-items:center;">
                        '.$productName.'
                    </div>
                </div>
                </a>';

                echo "<br>";
            }
        }
    }
}
