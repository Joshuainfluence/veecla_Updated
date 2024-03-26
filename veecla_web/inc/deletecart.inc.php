<?php
require_once __DIR__. "/../public/cart.classes.php";
require_once __DIR__. "/../public/cart.contr.php";

$id = $_GET['id'];
$result = new DeleteCartContr($id);
$result = $result->productDelete();
header("location: ../cart.php?id=cart");
