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
                                <h4><?= strtoupper($row['fullName']) ?></h4>
                                <p class="text-secondary mb-1">Chief Executive Officer</p>
                                <p class="text-muted font-size-sm">Asaba Delta State, Nigeria.</p>
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
                                <?= $row['fullName']?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Office</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                Chief Executive Officer
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $row['email']?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Username</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $row['username']?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                0810 585 6127
                            </div>
                        </div>
                        <hr>


                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                Delta State, Nigeria
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php endforeach ?>
<?php
require_once __DIR__ . "/footer.php";
?>