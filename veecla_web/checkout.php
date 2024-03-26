<?php
require_once __DIR__ . "/header.php";
require_once __DIR__ . "/config/dbh.php";
require_once __DIR__ . "/config/session.php";
require_once __DIR__ . "/public/cart.classes.php";
require_once __DIR__ . "/public/cartcheck.contr.php";
$userId = $_SESSION['id'];
$display = new CartCheckContr($userId);
$rows = $display->cartChecker($userId);
?>
<style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .bg-default {
            background-color: #879095;
        }

        .bg-default-alt {
            background-color: #FF87CE;
        }

        .text-default {
            color: #FF87CE;
        }

        .btn-default {
            background-color: #FF87CE;
        }

        .btn-default:hover {
            background-color: #FF1694;
            color: #fff;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
<div class="container" style="margin-top: 12%;">
    <main>
        <div class="py-5 text-center text-secondary">
            <img class="d-block mx-auto mb-4" src="assets/images/logo5.png" alt="" width="100" height="80">
            <h2>Checkout form</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required
                form group has a validation state that can be triggered by attempting to submit the form without
                completing it.</p>
        </div>

        <div class="row g-5">


            <div class="col-md-5 col-lg-4 order-md-last bg-light">
                <div class="location mt-2 mb-2">
                    <select class="form-select fw-bold" aria-label="Default select example">
                        <option selected>Select your Location</option>
                        <option value="delta">Delta state</option>
                        <option value="delta">Edo state</option>
                        <option value="delta">Lagos state</option>
                        <option value="delta">Anambra state</option>
                        <option value="delta">Imo state</option>

                    </select>
                    <div class="text-muted">Delivery Fee: N20</div>
                </div>
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-default">Your cart</span>
                    <span class="badge bg-default-alt rounded-pill"><?= count($rows, COUNT_NORMAL) ?></span>
                </h4>
                <ul class="list-group mb-3">
                    <?php foreach ($rows as $row) : ?>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0"><?= $row['product_name'] ?></h6>
                                <small class="text-muted"><?= $row['date_added'] ?></small>
                            </div>

                            <span class="text-muted">$<?= $row['product_price'] ?></span>

                            <span class="text-muted pricey-<?= $row['product_id'] ?>"></span>
                            <script>
                                var price<?= $row['product_id'] ?> = <?= $row['product_price'] * 1000 ?>;
                                var currency_value<?= $row['product_id'] ?> = price<?= $row['product_id'] ?>.toLocaleString("en-NG", {
                                    style: "currency",
                                    currency: "NGN"
                                });

                                // Get the element with the specific class for this product
                                var element<?= $row['product_id'] ?> = document.querySelector(".pricey-<?= $row['product_id'] ?>");

                                // Update the element with the converted currency value
                                element<?= $row['product_id'] ?>.innerHTML = currency_value<?= $row['product_id'] ?>;

                                console.log(currency_value<?= $row['product_id'] ?>);
                            </script>
                        </li>
                    <?php endforeach ?>

                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">−$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <?php
                        $total = 0;
                        foreach ($rows as $row) {
                            $total += $row['product_price'];
                        }
                        ?>
                        <strong>$<?= $total ?></strong>
                        <strong id="total_price"></strong>
                    </li>
                </ul>


                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </form>
            </div>


            <div class="col-md-7 col-lg-8 bg-light">
                <h4 class="mb-3">Billing address</h4>
                <!-- <form class="needs-validation" novalidate> -->
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="">
                        <!-- <div class="invalid-feedback">
                                    Valid first name is required.
                                </div> -->
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="">
                        <!-- <div class="invalid-feedback">
                                    Valid last name is required.
                                </div> -->
                    </div>

                    <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" id="username" placeholder="Username">
                            <!-- <div class="invalid-feedback">
                                        Your username is required.
                                    </div> -->
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <!-- <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div> -->
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                        <!-- <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div> -->
                    </div>

                    <div class="col-12">
                        <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                    </div>

                    <div class="col-md-5">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select" id="country" required>
                            <option value="">Choose...</option>
                            <option>United States</option>
                        </select>
                        <!-- <div class="invalid-feedback">
                                    Please select a valid country.
                                </div> -->
                    </div>

                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <select class="form-select" id="state" required>
                            <option value="">Choose...</option>
                            <option>California</option>
                        </select>
                        <!-- <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div> -->
                    </div>

                    <div class="col-md-3">
                        <label for="zip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="zip" placeholder="">
                        <!-- <div class="invalid-feedback">
                                    Zip code required.
                                </div> -->
                    </div>
                </div>

                <hr class="my-4">

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="same-address">
                    <label class="form-check-label" for="same-address">Shipping address is the same as my
                        billing address</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-info">
                    <label class="form-check-label" for="save-info">Save this information for next time</label>
                </div>

                <hr class="my-4">

                <h4 class="mb-3">Payment</h4>

                <div class="my-3">
                    <div class="form-check">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input">
                        <label class="form-check-label" for="credit">Credit card</label>
                    </div>
                    <div class="form-check">
                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input">
                        <label class="form-check-label" for="debit">Debit card</label>
                    </div>
                    <div class="form-check">
                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input">
                        <label class="form-check-label" for="paypal">PayPal</label>
                    </div>
                </div>

                <div class="row gy-3">
                    <div class="col-md-6">
                        <label for="cc-name" class="form-label">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="">
                        <small class="text-muted">Full name as displayed on card</small>
                        <!-- <div class="invalid-feedback">
                                    Name on card is required
                                </div> -->
                    </div>

                    <div class="col-md-6">
                        <label for="cc-number" class="form-label">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="">
                        <!-- <div class="invalid-feedback">
                                    Credit card number is required
                                </div> -->
                    </div>

                    <div class="col-md-3">
                        <label for="cc-expiration" class="form-label">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="">
                        <!-- <div class="invalid-feedback">
                                    Expiration date required
                                </div> -->
                    </div>

                    <div class="col-md-3">
                        <label for="cc-cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="">
                        <!-- <div class="invalid-feedback">
                                    Security code required
                                </div> -->
                    </div>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-secondary btn-lg mb-3" type="submit">Continue to checkout</button>
                <!-- </form> -->
                <a href="home.php" class="text-decoration-none text-secondary fs-5">return</a>

            </div>
        </div>
        <!-- na the javascript code dey -->
    </main>
</div>

    <?php
    require_once __DIR__ . "/footer.php";
    ?>