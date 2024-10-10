<?php
require_once __DIR__. "/../config/session.php";
if (isset($_POST['update'])) {
    $id = $_SESSION['id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $office = $_POST['office'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    
    
    $profile_image = isset($_POST['image']) ? $_FILES['image'] : null;
    

    require_once __DIR__ . "/../config/dbh.php";
    require_once __DIR__ . "/../public/adminprofile.classes.php";
    require_once __DIR__ . "/../public/adminprofile.contr.php";
    $update= new AdminProfileSettingsUpdate($fullname, $email, $username, $password, $office, $mobile, $address, $_FILES, $id);
    $update= $update->updateAdmin();
    // i ma calling the header funciton before i return the statement, because it makes the browser respond fast
    header("location: ../admin/adminAccountSettings.php?id=$id, uploadsuccessful");
    return $update;
   
}

