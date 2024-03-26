<?php

if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];
    $product_unit = $_POST['product_unit'];
    $product_category = $_POST['product_category'];
    $product_info = $_POST['product_info'];
    $product_image = isset($_POST['product_image']) ? $_FILES['product_image'] : null;
    $related_image = isset($_POST['related_image']) ? $_FILES['related_image'] : null;
    $applied_image = isset($_POST['applied_image']) ? $_FILES['applied_image'] : null;
    $product_video = isset($_POST['product_video']) ? $_FILES['product_video'] : null;

    require_once __DIR__ . "/../config/dbh.php";
    require_once __DIR__ . "/../public/adminproduct.classes.php";
    require_once __DIR__ . "/../public/adminproduct.contr.php";
    $product = new AdminProductContr($product_name, $product_description, $product_price, $product_unit, $product_category, $product_info, $_FILES, $_FILES, $_FILES, $_FILES);
    $product = $product->recordProduct();
    // i ma calling the header funciton before i return the statement, because it makes the browser respond fast
    header("location: ../admin/viewproduct.php?uploadsuccessful");
    return $product;
   
}

