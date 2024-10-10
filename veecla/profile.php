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
    </style>
    <section>

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
                                <p class="text-secondary mb-1"><?= ucfirst($row['Vstatus']) ?></p>
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= ucwords($row['fullName']) ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Account</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= ucfirst($row['Vstatus']) ?>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= ucfirst($row['email']) ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Username</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= ucfirst($row['username']) ?>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Date Registered</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= date('M j Y', strtotime($row['created_at'])) ?>
                            </div>
                        </div>
                        <hr>
                        <?php
                        if (!empty($row['phone'])) {
                        ?>
                            <div class="row">

                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= $row['phone'] ?>
                                </div>

                            </div>

                            <hr>
                        <?php
                        }
                        ?>

                        <?php
                        if (!empty($row['address'])) {
                        ?>
                            <div class="row">

                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= ucwords($row['address']) ?>

                                </div>
                            </div>
                            <hr>
                        <?php
                        }
                        ?>
                        <div class="row">
                            <div class="col-sm-3">
                                <a href="usersetting.php?id=usersetting" class="text-decoration-none text-secondary fs-2">Settings<i class="fa fa-cog"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php endforeach ?>
<?php
require_once __DIR__ . "/footer.php";
?>