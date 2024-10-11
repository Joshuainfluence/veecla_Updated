<?php 
// require_once 'routes.php';
require_once __DIR__. "/config/session.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- <link rel="stylesheet" href="assets/login.css"> -->
    <!-- <link rel="icon" type="image/x-icon" href="img/logo5.png" /> -->
    <script src="assets/sweetalert/sweetalert2.all.min.js"></script>
    <script src="assets/sweetalert/jquery-3.6.4.min.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/images/logo5.png" />
    <link href="https://fonts.googleapis.com/css2?family=GucciSanse&display=swap" rel="stylesheet">

</head>

<body>
    <style>
        .script {
            z-index: 9999;
        }
    </style>
    <!-- <div class="script">
        <script>
            window.onload = function() {
                <?php if (isset($_SESSION['success'])) : ?>
                    Swal.fire("Success", "<?= $_SESSION['success'] ?>", "success");
                <?php endif ?>

                <?php if (isset($_SESSION['error'])) : ?>
                    Swal.fire("Error", "<?= $_SESSION['error'] ?>", "error");
                <?php endif ?>
            };
        </script>
    </div> -->
    <div class="container">
        <!-- <video autoplay loop muted plays-inline class="background-clip">
            <source src="videos/77cce4a099504cda9eb0e10d5610f63f.mp4" type="video/mp4">
        </video> -->
        <style>
            .background2-clip {
                width: 50%;
                height: 100%;
                display: flex;
                justify-self: center;
                z-index: 999;
                margin-left: 25%;
            }

            .background-clip {
                display: none;
            }

            select {
                width: 10rem;
                height: 4rem;
                font-size: 1rem;
                background-color: #000;
                border: 2px solid #fff;
                color: #fff;
                text-align: center;
                border-radius: 4rem;
                font-weight: 600;
                transition: 0.3s;
            }

            select:hover {
                background-color: #636363;
                color: #000;
                border: 1px solid #636363;
            }

            select option {
                background-color: #fff;
                color: #000;
            }

            h1 {
                font-family: 'GucciSans';
            }

            @font-face {
                font-family: 'GucciSans';
                src: url('path/to/GucciSans.woff2') format('woff2'),
                    /* Modern Browsers */
                    url('path/to/GucciSans.woff') format('woff');
                /* Older Browsers */
                /* Add more src lines if you have different font file formats */
            }

            @media screen and (max-width:992px) {
                .background-clip {
                    width: 100%;
                    height: 100%;
                    display: flex;
                    justify-self: center;
                    z-index: 999;
                    margin-left: 0%;
                }

                .background2-clip {
                    display: none;
                }
            }
        </style>
        <!-- <img src="img/aunty_vic.jpg" class="background2-clip" alt="">
        <img src="img/WhatsApp Image 2023-12-20 at 18.31.06_3709ef4b.jpg" class="background-clip" alt=""> -->
        <div class="content">
            <h1>Veecla</h1>
            <h3>Realising True Beauty</h3>
            <form action="inc/index.inc.php" method="POST">
                <select name="country" id="country">
                    <!-- <option value="default" selected>Select Country</option> -->
                    <option value="Nigeria">Nigeria</option>
                    <option value="South">South Africa</option>
                    <option value="Italy">Italy</option>
                    <option value="China">China</option>
                </select>
                <!-- <a href="home.php?id=home">Shop Now</a> -->
                <input type="submit" class="shop" value="Shop Now">
            </form>
        </div>
    </div>
</body>

</html>
