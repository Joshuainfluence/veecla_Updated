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
                        <a href="#" class="logo">
                            <img src="assets/images/logologo.png" style="width:150px; height:50px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <?php
                            if ($title == "home") {
                            ?>

                                <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                                <li class="scroll-to-section"><a href="#men">Lip&Skincare</a></li>
                                <li class="scroll-to-section"><a href="#fragrance">Fragrance</a></li>
                                <li class="scroll-to-section"><a href="#fashion">Fashion</a></li>
                                <li class="scroll-to-section"><a href="#accessories">Accessories</a></li>
                                <li><a href="search"><i class="fa fa-search"></i></a></li>
                                <?php


                                ?>
                                <?php
                                if (isset($_SESSION['id'])) {
                                    require_once __DIR__ . "/config/dbh.php";
                                    require_once __DIR__ . "/public/adminuser.classes.php";
                                    require_once __DIR__ . "/public/adminuser.contr.php";
                                    $notifications = new NotifyUserSpec($_SESSION['id']);
                                    $notifications = $notifications->userEach();
                                ?>
                                    <li class="myhover"><a href="notification" class="mihover"><i class="fa fa-bell"></i> </a><span>
                                            <?php
                                            $value = count($notifications, COUNT_NORMAL);
                                            if ($value > 0) {
                                                echo $value;
                                            }
                                            ?>
                                        </span>
                                        <style>
                                            .myhover span {
                                                padding: 0rem 0.3rem 0rem 0.3rem;
                                                margin: -2.5rem 0 0 0.7rem;
                                                background: grey;
                                                position: absolute;
                                                z-index: 9999;
                                                border-radius: 20px;
                                                font-size: 0.7rem;
                                                color: #fff;
                                            }
                                        </style>

                                        <div class="notification">
                                            <div class="heading">
                                                Message center
                                            </div>
                                            <div class="body">
                                                <?php
                                                foreach ($notifications as $notification):
                                                ?>
                                                    <div class="chat">

                                                        <div class="image">
                                                            <img src="assets/images/aunty_vic.jpg" alt="">
                                                        </div>
                                                        <div class="message">
                                                            <h1><?= $notification['topic'] ?></h1>
                                                            <p><?= $notification['content'] ?>... 1hr ago</p>

                                                        </div>
                                                        <div class="del">
                                                            <a href=""><i class="fa fa-trash"></i></a>
                                                        </div>


                                                    </div>
                                                    <hr>
                                                <?php endforeach ?>
                                                <div class="chat">

                                                    <div class="image">
                                                        <img src="assets/images/aunty_vic.jpg" alt="">
                                                    </div>
                                                    <div class="message">
                                                        <h1>Account verification</h1>
                                                        <p>Hello Joshua Onyeuku... 1hr ago</p>
                                                    </div>
                                                    <div class="del">
                                                        <a href=""><i class="fa fa-trash"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <style>
                                            .notification {
                                                position: absolute;
                                                width: 300px;
                                                height: 300px;
                                                /* border-top: 1px solid blue; */
                                                border: 1px solid #fcfcfc;
                                                /* border-top-left-radius: 10px; */
                                                right: 0;
                                                border-radius: 5px;
                                                box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
                                                /* display: none; */
                                                /* transition: transform 0.5s ease, opacity 0.5s ease; */
                                                /* z-index: 999999; */
                                                background: grey;
                                                opacity: 0;
                                                /* transform: translateY(100%); */
                                                transition: opacity 0.5s ease;
                                                margin: 0rem 0 0 0;

                                            }


                                            /* .myhover {
                                            border: 2px solid red;
                                            position: relative;
                                        } */

                                            .myhover:hover .notification {
                                                opacity: 1;
                                                /* transform: translateY(0); */
                                                /* display: block; */
                                            }

                                            .notification .heading {
                                                width: 100%;
                                                height: 10%;
                                                /* background: blue; */
                                                top: 0;
                                                right: 0;
                                                padding: 0.4rem 0 0.4rem 1rem;
                                                color: #ffff;
                                            }

                                            .notification .body {
                                                width: 100%;
                                                height: 90%;
                                                background: #fff;

                                            }


                                            .notification .body .chat {
                                                width: 100%;
                                                height: 20%;
                                                background: #fcfcfc;
                                                display: flex;
                                                padding: 0.3rem 1rem 0 1rem;
                                                /* border: 1px solid green; */
                                            }



                                            .notification .body .chat .image {
                                                width: 20%;
                                                height: 50px;
                                                display: flex;
                                            }

                                            .notification .body .chat .image img {
                                                width: 100%;
                                                height: 100%;
                                                border-radius: 50px;
                                            }

                                            .notification .body .chat .message {
                                                width: 70%;
                                                height: 50px;
                                                display: flex;
                                                flex-direction: column;
                                                justify-content: center;
                                                padding: 0 1rem 0 1rem;
                                                /* align-items: center; */

                                            }

                                            .notification .body .chat .message h1 {
                                                font-size: 0.9rem;
                                                font-weight: bold;
                                            }

                                            .notification .body .chat .message p {
                                                font-size: 0.6rem;
                                            }

                                            .notification .body .chat .del {
                                                width: 10%;
                                                height: 50px;
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                            }

                                            @media screen and (max-width:900px) {
                                                .notification {
                                                    position: absolute;
                                                    width: 300px;
                                                    height: 300px;
                                                    /* border-top: 1px solid blue; */
                                                    border: 1px solid #fcfcfc;
                                                    /* border-top-left-radius: 10px; */
                                                    right: 0;
                                                    left: 0;
                                                    border-radius: 5px;
                                                    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
                                                    display: none;
                                                    transition: 1.3s all ease;
                                                    z-index: 9999999999;
                                                    background: blue;
                                                    margin: 0 20% 0 20%;

                                                }
                                            }
                                        </style>

                                    </li>
                                <?php
                                } else {
                                ?>

                                <?php
                                }

                                ?>

                                <li class="scroll-to-section"><a href="#explore">Explore</a></li>
                                <!-- <li class="scroll-to-section"><a href="#accessories">Vlog</a></li> -->




                                <li class="submenu">

                                    <a href="javascript:;">Pages</a>
                                    <ul>
                                        <li><a href="about">About Us</a></li>
                                        <li><a href="products">Products</a></li>
                                        <!-- <li><a href="single-product.php?id=single">Single Product</a></li> -->
                                        <li><a href="contact">Contact Us</a></li>
                                        <!-- <li><a href="faqs.php?id=faqs">FAQS</a></li> -->
                                        <li><a href="faqs.php">FAQS</a></li>



                                    </ul>
                                </li>
                            <?php
                            } else {
                            ?>
                                <!-- <li class="scroll-to-section"><a href="home.php?id=home" class="active">Home</a></li> -->
                                <li class="scroll-to-section"><a href="home" class="active">Home</a></li>

                                <li><a href="about">About Us</a></li>
                                <li><a href="products">Products</a></li>
                                <!-- <li><a href="single-product.html">Single Product</a></li> -->
                                <li><a href="contact">Contact Us</a></li>
                                <li><a href="faqs">FAQS</a></li>
                                <li><a href="search"><i class="fa fa-search"></i></a></li>

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
                                        <li><a href="logout">Logout <i class="fa fa-sign-out"></i></a></li>
                                        <li><a href="cart"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="profile">Profile</a></li>
                                        <li><a href="usersetting">Settings</a></li>
                                    <?php
                                    } else {
                                    ?>
                                        <li><a href="login">Login <i class="fa fa-sign-in"></i></a></li>
                                    <?php
                                    }
                                    ?>



                                    <!-- <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li> -->
                                </ul>
                            </li>

                        </ul>
                        <!-- <a href="" style="margin-top: 6%; display:flex; justify-content:center; margin-left:50%;">
                            <span><i class="fa fa-search fa-1x text-dark"></i></span>
                            
                        </a> -->
                        <!-- <a class='menu-search'>
                            <span><i class="fa fa-search fa-2x"></i></span>
                        </a> -->
                        <a href="search.php?id=search" class="menu-searchlink">
                            <i class="fa fa-search"></i>
                        </a>
                        <style>
                            .menu-searchlink {
                                display: none;
                            }

                            @media screen and (max-width:1200px) {
                                .menu-searchlink {
                                    font-size: 25px;
                                    cursor: pointer;
                                    display: block;
                                    position: absolute;
                                    top: 28px;
                                    width: 32px;
                                    height: 40px;
                                    /* text-indent: -9999em; */
                                    z-index: 99;
                                    right: 75px;
                                    color: #1e1e1e;
                                }

                                .menu-searchlink:hover {
                                    color: #acb1b4;
                                }


                                .header-area .main-nav .menu-searchlink span {
                                    top: 16px;
                                }

                            }
                        </style>
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