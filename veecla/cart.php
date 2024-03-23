<?php
require_once __DIR__ . "/header.php";
require_once __DIR__ . "/public/cart.classes.php";
require_once __DIR__ . "/public/cartcheck.contr.php";
require_once __DIR__ . "/config/session.php";
$userId = $_SESSION['id'];
$rows = new CartCheckContr($userId);
$rows = $rows->cartChecker($userId);
?>

<style>
    .container-page{
        margin-top: 12%;
        width: 90%;
        margin-left: 5%;
    }
    @media screen and (max-width:1200px) {
        .container-page{
            margin-top: 7rem;
        }
    }
</style>
<!-- Begin Page Content -->
<div class="container-page">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Cart Page | Ordered Products</h1>
    <p class="mb-4">Our Products takes four days and according to our policy we work with Payment before delivery. <a target="_blank" href="https://datatables.net">Terms and Conditions</a>.</p>

    <!-- DataTales Example -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div> -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <?php
                            $total = 0;
                            foreach ($rows as $row) {
                                $total += $row['product_price'] * $row['product_quantity'];
                            }
                            ?>
                           <?php 
                          if ($total == 0) {
                            ?>
                            <th colspan="9">No product added yet</th>
                            <?php
                          } else {
                            ?>
                            <thead>
                            <style>
                                td {
                                    font-weight: lighter;
                                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                                }
                            </style>

                            <tr>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Added</th>
                                <th>Price</th>

                                <th>Quantity</th>

                                <th>Action</th>
                                <th>Save</th>
                                <th>Fee</th>
                                <th>Delivery</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php


                                // fetching details from the cart table in the database
                            foreach ($rows as $row) :
                            ?>
                                <tr>
                                    <td><img style="width:80px; height:80px;" src="inc/uploads/<?= $row['product_image']; ?>" alt=""></td>
                                    <!-- we are getting the id, so as to use it for deleting -->

                                    <td><?= $row['product_name']; ?></td>
                                    <td><?= $row['date_added']; ?></td>
                                    <td>$<?= $row['product_price'] * $row['product_quantity'] ?> <br><span class="pricey-<?= $row['product_id'] ?>"></span></td>
                                    <script>
                                        var price<?= $row['product_id'] ?> = <?= $row['product_price'] * 1000 * $row['product_quantity'] ?>;
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
                                    <td><?= $row['product_quantity'] ?></td>
                                    <td>
                                        <a href="inc/deletecart.inc.php?id=<?= $row['id']; ?>" class="btn btn-outline-danger mb-2">Delete</a>

                                    </td>
                                    <td>
                                        <a href="../cart/DeleteCart.inc.php?id=<?= $row['id']; ?>" class="btn btn-outline-warning"><i class="fa fa-heart"></i></a>

                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            <?php endforeach ?>
                            <tr>
                               

                                    <th colspan='9'>Total: $<?= $total ?>=> <span class='total'></span></th>
                               

                                <script>
                                    var price = <?= $total ?> * 1000;
                                    var currency_value = price.toLocaleString("en-NG", {
                                        style: "currency",
                                        currency: "NGN"
                                    });

                                    // Get the element with the specific class for this product
                                    var element = document.querySelector(".total");

                                    // Update the element with the converted currency value
                                    element.innerHTML = currency_value;

                                    console.log(currency_value);
                                </script>
                            </tr>

                        </tbody>
                        <?php

                          }
                          
                           ?>
                          

                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-secondary w-100 btn-lg">Proceed to checkout</a>

                </div>
            </div>

        </div>

    </div>
    <!-- </div> -->
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
require_once __DIR__ . "/footer.php";
?>
</body>

</html>