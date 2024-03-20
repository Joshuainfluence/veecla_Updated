<?php
require_once __DIR__ . "/config/session.php";
$title = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title><?= $title ?></title>

    <link rel="icon" type="image/x-icon" href="assets/images/logo5.png" />
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">


    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <link rel="stylesheet" href="assets/font_awesome/css/font-awesome.css">
    <!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
</head>

<body>


    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
           
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/log2.png" style="width:150px; height:80px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <?php
                            if ($title == "home") {
                            ?>

                                <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                                <li class="scroll-to-section"><a href="#men">Lipcare</a></li>
                                <li class="scroll-to-section"><a href="#women">Skincare</a></li>
                                <li class="scroll-to-section"><a href="#kids">LipTreat</a></li>
                                <li class="scroll-to-section"><a href="#accessories">Accessories</a></li>
                                <li><a href="search.php?id=search"><i class="fa fa-search"></i></a></li>
                                <li class="scroll-to-section"><a href="#explore">Explore</a></li>
                                <!-- <li class="scroll-to-section"><a href="#accessories">Vlog</a></li> -->




                                <li class="submenu">
                                
                                    <a href="javascript:;">Pages</a>
                                    <ul>
                                        <li><a href="about.php?id=about">About Us</a></li>
                                        <li><a href="products.php?id=product">Products</a></li>
                                        <!-- <li><a href="single-product.php?id=single">Single Product</a></li> -->
                                        <li><a href="contact.php?id=contact">Contact Us</a></li>
                                        <li><a href="faqs.php?id=faqs">FAQS</a></li>
                                        

                                    </ul>
                                </li>
                            <?php
                            } else {
                            ?>
                                <li class="scroll-to-section"><a href="home.php?id=home" class="active">Home</a></li>
                                <li><a href="about.php?id=about">About Us</a></li>
                                <li><a href="products.php?id=product">Products</a></li>
                                <!-- <li><a href="single-product.html">Single Product</a></li> -->
                                <li><a href="contact.php?id=contact">Contact Us</a></li>
                                <li><a href="faqs.php?id=faqs">FAQS</a></li>
                                <li><a href="search.php?id=search"><i class="fa fa-search"></i></a></li>

                            <?php

                            }
                            ?>


                            <!-- <li class="submenu"> -->


                            <!-- </li> -->
                            <li class="submenu">
                                <a href="javascript:;"><i class="fa fa-user-circle"></i></a>
                                <ul>
                                    <?php
                                    if (isset($_SESSION['id'])) {
                                    ?>
                                        <li><a href="config/logout.php">Logout <i class="fa fa-sign-out"></i></a></li>
                                        <li><a href="cart.php?id=cart"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="profile.php?id=profile">Profile</a></li>
                                        <li><a href="#">Settings</a></li>
                                    <?php
                                    } else {
                                    ?>
                                        <li><a href="registration/login.php">Login <i class="fa fa-sign-in"></i></a></li>
                                    <?php
                                    }
                                    ?>



                                    <!-- <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li> -->
                                </ul>
                            </li>
                            
                        </ul>
                        <!-- <a href="" style="margin-top: 6%; display:flex; justify-content:center; margin-left:50%;">
                            <span><i class="fa fa-search fa-2x text-dark"></i></span>
                            
                        </a> -->
                        <!-- <a class='menu-search'>
                            <span><i class="fa fa-search fa-2x"></i></span>
                        </a> -->
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->