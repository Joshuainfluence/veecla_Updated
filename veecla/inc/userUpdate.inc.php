<?php
require_once __DIR__. "/../config/session.php";
if (isset($_POST['update'])) {
    $id = $_SESSION['id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    
    
    $profile_image = isset($_POST['image']) ? $_FILES['image'] : null;
    

    require_once __DIR__ . "/../config/dbh.php";
    require_once __DIR__ . "/../public/profile.classes.php";
    require_once __DIR__ . "/../public/profile.contr.php";
    $update= new userProfileSettingsUpdate($fullname, $email, $username, $password, $phone, $address, $_FILES, $id);
    $update= $update->updateUser();
    // i am calling the header funciton before i return the statement, because it makes the browser respond fast
    header("location: ../usersetting.php?id=$id, uploadsuccessful");
    return $update;
   
}

