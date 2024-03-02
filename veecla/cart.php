<?php
require_once __DIR__ . "/header.php";
require_once __DIR__ . "/public/cart.classes.php";
require_once __DIR__ . "/public/cartcheck.contr.php";
$userId = $_SESSION['id'];
$rows = new CartCheckContr($userId);
$rows = $rows->cartChecker($userId);
?>

<!-- Begin Page Content -->
<div class="container-fluid mt-5">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date added</th>
                                    <th>Product price</th>
                                    <th>Product Image</th>


                                    <th>Delete</th>
                                    <th>Start date</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php



                                foreach ($rows as $row) :
                                ?>
                                    <tr>

                                        <td><?= $row['product_name']; ?></td>
                                        <td><?= $row['date_added']; ?></td>
                                        <td>$<?= $row['product_price'] ?> <br><span class="pricey-<?= $row['product_id'] ?>"></span></td>
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
                                        <td><img style="width:80px; height:80px;" src="inc/uploads/<?= $row['product_image']; ?>" alt=""></td>
                                        <!-- we are getting the id, so as to use it for deleting -->
                                        <td><a href="../cart/DeleteCart.inc.php?id=<?= $row['id']; ?>" class="btn btn-default-alt btn-del"><i class="fa fa-trash"></i></a></td>
                                    </tr>

                                <?php endforeach ?>
                                <tr>
                                    <?php
                                    $total = 0;
                                    foreach ($rows as $row) {
                                        $total += $row['product_price'];
                                    }
                                    ?>
                                    <th colspan="5">Total: $<?= $total ?>=> <span class="total"></span></th>
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

                        </table>
                    </div>
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