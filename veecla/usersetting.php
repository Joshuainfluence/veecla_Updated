<?php

require_once __DIR__ . "/header.php";
require_once __DIR__ . "/config/session.php";
require_once __DIR__ . "/config/dbh.php";
require_once __DIR__ . "/public/profile.classes.php";
require_once __DIR__ . "/public/profile.contr.php";
$userId = $_SESSION['id'];
$rows = new UserProfileContrVeecla($userId);
$rows = $rows->userProfileShowVeecla();

foreach ($rows as $row):
?>
    <style>
        section {
            margin-top: 15%;
        }

        .script {
            z-index: 9999;
        }
    </style>
    <section>
        <div class="script">
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
        </div>

        <div class="row gutters-sm">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="inc/profileUploads/<?= $row['profileImage'] ?>" alt="Admin" width="400">
                            <div class="mt-3">
                                <div class="mb-2 d-flex justify-content-between">
                                    <h4><?= strtoupper($row['fullName']) ?></h4>
                                    <?php
                                    if ($row['Vstatus'] == "verified") {
                                    ?>
                                        <img src="assets/images/verify.jpeg" style="width: 30px; margin-top: -0.2rem;" class="me-2" alt="">
                                    <?php
                                    }
                                    ?>
                                </div>
                             
                                <p class="text-secondary mb-1"> <?= ucfirst($row['Vstatus']) ?></p>
                                <p class="text-muted font-size-sm">
                                    <?php
                                    if (!empty($row['address'])) {
                                    ?>
                                        <?= $row['address'] ?>
                                    <?php
                                    }
                                    ?>
                                </p>
                                <!-- <button class="btn btn-primary">Follow</button>
                        <button class="btn btn-outline-primary">Message</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <form action="inc/userUpdate.inc.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                        <?php if (isset($_SESSION['success'])) : ?>
                       <div class="alert alert-success mt-2"><?= $_SESSION['success']?></div>
                    <?php endif ?>

                    <?php if (isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger mt-2"><?= $_SESSION['error']?></div>

                    <?php endif ?>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-1">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="fullname" class="form-control" value=" <?= $row['fullName'] ?>" id="" placeholder="Enter full name">
                                </div>
                            </div>


                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-1">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="email" class="form-control" value=" <?= $row['email'] ?>" id="" placeholder="Enter email address">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-1">Username</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="username" value="<?= $row['username'] ?>" class="form-control" placeholder="Enter username">
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-1">Password</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="password" name="password" class="form-control" placeholder="Enter password">
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php
                                    if (empty($row['phone'])) {
                                    ?>

                                        <input type="number" name="phone" class="form-control" placeholder="Enter phone number" id="">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="number" name="phone" class="form-control" placeholder="Enter phone number" id="" value="<?= $row['phone'] ?>">

                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-1">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php
                                    if (empty($row['address'])) {
                                    ?>
                                        <input type="text" name="address" class="form-control" placeholder="Enter address  e.g  Delta State, Nigeria" id="">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="text" name="address" class="form-control" placeholder="Enter address  e.g  Delta State, Nigeria" value="<?= $row['address'] ?>" id="">
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-1">
                                        Profile image
                                    </h6>
                                </div>

                                <div class="col-sm-9 text-secondary">

                                    <input type="file" name="image" class="form-control w-100" id="">
                                </div>
                            </div>
                            <hr>
                            <div class="row">

                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" name="update" class="btn btn-primary" value="Update" id="">
                                </div>
                            </div>
                            <hr>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
<?php endforeach ?>
<?php
require_once __DIR__ . "/footer.php";
?>
<?php unset($_SESSION['success'], $_SESSION['error'])?>