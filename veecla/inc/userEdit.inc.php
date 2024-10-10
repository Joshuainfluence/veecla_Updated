<?php 


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  
    
    $unique_id = $_POST['id'];
    $account = $_POST['account'];
    $vcode = $_POST['vcode'];

    require_once __DIR__. "/../config/dbh.php";
    require_once __DIR__. "/../public/userEdit.classes.php";
    require_once __DIR__. "/../public/userEdit.contr.php";
    require_once __DIR__. "/../public/adminuser.classes.php";
    require_once __DIR__. "/../public/adminuser.contr.php";



    // this is taking the inputs which are the account, the verification code status and the user id
    $update = new UserEditContr($account, $vcode, $unique_id);
    $update->editUserUpdate();
    $topic = "Verification";
    $content = "Dear user your account have been verified";
    $notify = new NotifyUser($topic, $content, $unique_id);
    $notify  = $notify->userNotify();
    header("Location: ../admin/userEdit.php?id=$unique_id&account=$account");
    
    
}