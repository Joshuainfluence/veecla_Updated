<?php

if (isset($_POST['createSocial'])) {
    $topic = $_POST['postTopic'];
    $content = $_POST['postLink'];
   
    
    $product_image = isset($_POST['postImage']) ? $_FILES['postImage'] : null;
    

    require_once __DIR__ . "/../config/dbh.php";
    require_once __DIR__ . "/../public/socials.classes.php";
    require_once __DIR__ . "/../public/socials.contr.php";
    $socials= new SocialContr($topic, $content, $_FILES);
    $socials= $socials->recordSocials();
    // i ma calling the header funciton before i return the statement, because it makes the browser respond fast
    header("location: ../admin/viewSocials.php?uploadsuccessful");
    return $socials;
   
}

