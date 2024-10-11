<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap5.min.css">
    <style>
     

        h1 {
            text-align: center;
            font-size: 1.5em;
        }

        h3 {
            text-align: center;
            font-size: 1.4rem;
            text-shadow: pink;
        }

        a {
            text-decoration: none;
            color: grey;
            font-size: 22px;
            text-align: center;
        }
        a:hover{
            color: palevioletred;
        }

        .card {
            background-color: #fff;
            margin-top: 7rem;
            box-shadow: 3px 3px 3px 3px pink;
        }
        body{
            background-color: #636363;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="col">
                            <h1 style="font-size: 100px;">🥰</h1>
                        </div>
                        <div class="col">
                            <h1>Thank You for subscribing to our Newsletter</h1>
                            <h3>You will receive latest Updates and news from Us</h3>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center">
                            <a href="home.php?id=home">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html> -->
<?php
require_once __DIR__ . "/config/session.php";
$title = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo5.png" />

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .container {
            width: 100%;
            height: 100vh;
            background-image: url(assets/images/logo5.png);
            background-size: cover;
        }

        .row:nth-child(1) {
            width: 100%;
            height: 100vh;
            opacity: 0.4;
            /* background-color: red; */
            background-color: grey;

        }

        .row:nth-child(2) {
            width: 60%;
            height: 50%;
            /* opacity: 0.4; */
            /* background-color: red; */
            background: transparent;
            position: absolute;
            margin: -40% 20% 0 20%;
            padding: 1rem 0 0 0;
            color: #000;
            display: flex;
            /* border: 1px solid red; */
            justify-content: center;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;

        }

        .col {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        h1,
        h3 {
            text-align: center;
        }

        a {
            text-decoration: none;
            background: #333;
            padding: 1rem;
            width: 40%;
            margin: 1rem 0 0 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            transition: 0.3s all ease;
        }

        a:hover {
            background: #000;
        }

        @media screen and (max-width:700px) {
            .row:nth-child(2) {
                width: 90%;
                height: 50%;
                /* opacity: 0.4; */
                /* background-color: red; */
                background: transparent;
                position: absolute;
                margin: -100% 5% 0 5%;
                padding: 1rem 0 0 0;
                color: #000;
                display: flex;
                /* border: 1px solid red; */
                justify-content: center;
                box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;


            }

            h1,
            h3 {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- <img src="assets/images/logo5.png" alt=""> -->
        </div>
        <div class="row">
            <div class="col">
                <h1 style="font-size: 4rem;">🥰</h1>
                <h1>Thank You for subscribing to our Newsletter.</h1>
                <h3>You will receive latest Updates and news from Us.</h3>

                <a href="home">Back to home</a>
            </div>
        </div>
    </div>
</body>

</html>