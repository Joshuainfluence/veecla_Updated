<?php 
require_once __DIR__ . "/../config/session.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $location = $_POST['country'];

    require_once __DIR__. "/../public/index.contr.php";
    $result = new Location($location);
    $_SESSION['location'] = $location;
    header("Location: ../home.php?id=home");
}