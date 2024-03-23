<?php
require_once __DIR__ . "/../config/session.php";
require_once __DIR__ . "/../config/dbh.php";
require_once __DIR__ . "/../public/cart.classes.php";
require_once __DIR__ . "/../public/cart.contr.php";
require_once __DIR__ . "/../public/cartselect.contr.php";


if (!isset($_SESSION['id'])) {
    header("location: ../redirect.php?id=back");
} else {
    // selecting all from the products we want to add to cart table in the database
    $productId = $_GET['id'];
    $usersId = $_SESSION['id'];
    // $product_quantity = isset($_SESSION['product_quantity']) ? $_SESSION['product_quantity'] : 1;
    $product_quantity = $_GET['quantity'];
    $details = new SelectCartContr($productId);
    header("location: ../cart.php?id=$productId");
    $rows = $details->selectcart2($productId);
   

    // print_r($rows);
    // looping through the products table to get the values of the product we want to insert to database
    foreach ($rows as $row) {

        $productId = $row['id'];
        $product_name = $row['product_name'];
        $product_price = $row['product_price'];
        $product_image = $row['product_image'];

        // inserting those values to the new cart table in the database
        $data = new CartContr($product_name, $product_price, $product_quantity, $usersId, $productId, $product_image);
        
        return $data->addCart2();
    }
}
