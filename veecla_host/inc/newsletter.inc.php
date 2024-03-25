<?php

if (isset($_POST['create'])) {
    $topic = $_POST['newsTopic'];
    $content = $_POST['newsContent'];
    $information = $_POST['newsInformation'];
    
    $product_image = isset($_POST['newImage']) ? $_FILES['newImage'] : null;
    

    require_once __DIR__ . "/../config/dbh.php";
    require_once __DIR__ . "/../public/newsletter.classes.php";
    require_once __DIR__ . "/../public/newsletter.contr.php";
    $news= new NewsletterContr($topic, $content, $information, $_FILES);
    $news= $news->recordNews();
    // i ma calling the header funciton before i return the statement, because it makes the browser respond fast
    header("location: ../admin/viewNewsletters.php?uploadsuccessful");
    return $news;
   
}

