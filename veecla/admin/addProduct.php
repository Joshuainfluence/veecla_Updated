<?php
require_once __DIR__ . "/adminHeader.php";
require_once __DIR__ . "/../config/session.php";
?>

<style>
    .script {
        z-index: 9999;
    }
</style>
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
<?php
if (isset($_SESSION['success'])) :
    echo '<script>console.log("Success message: ' . $_SESSION['success'] . '");</script>';
endif;

if (isset($_SESSION['error'])) :
    echo '<script>console.log("Error message: ' . $_SESSION['error'] . '");</script>';
endif;
?>

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
    <?php endif ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Products</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-12">
            <!-- <div class="card"> -->
            <form action="../inc/product.inc.php" method="POST" enctype="multipart/form-data">
                <div class="form-group mt-2">
                    <label for="product_name">
                        <h5>Product name</h5>
                    </label>
                    <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Enter Product name">
                </div>
                <div class="form-group mt-2">
                    <label for="product_description">
                        <h5>Product Description</h5>
                    </label>
                    <input type="text" name="product_description" id="product_description" class="form-control " placeholder="Enter Product description">
                </div>
                <div class="form-group mt-2">
                    <label for="product_price">
                        <h5>Product Price</h5>
                    </label>
                    <input type="number" name="product_price" id="product_price" class="form-control " placeholder="Enter Product price">
                </div>
                <div class="form-group mt-2">
                    <label for="product_unit">
                        <h5>Product Unit</h5>
                    </label>
                    <input type="text" name="product_unit" id="product_unit" class="form-control " placeholder="Enter Product unit">
                </div>
                <div class="form-group mt-2">
                    <label for="product_unit">
                        <h5>Product Category</h5>
                    </label>
                    <select name="product_category" id="category" class="form-control bg-secondary text-light">
                        <option value="lipcare">Lipcare</option>
                        <option value="skincare">Skincare</option>
                        <option value="liptreat">Liptreat</option>
                        <option value="accessories">Accessories</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="product_info">
                        <h5>Product Information</h5>
                    </label>
                    <textarea type="text" name="product_info" cols="30" rows="10" id="product_info" class="form-control " placeholder="Enter Product description"></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="product_image">
                        <h5>Product Image</h5>
                    </label>
                    <input type="file" name="product_image" id="product_image" class="form-group">
                </div>
                <div class="form-group mt-2">
                    <label for="related_image">
                        <h5>Related Image</h5>
                    </label>
                    <input type="file" name="related_image" id="related_image" class="form-group ">
                </div>
                <div class="form-group mt-2">
                    <label for="applied_image">
                        <h5>Image on Application</h5>
                    </label>
                    <input type="file" name="applied_image" id="applied_image" class="form-group">
                </div>
                <div class="form-group mt-2">
                    <label for="video_product">
                        <h5>Video of Product</h5>
                    </label>
                    <input type="file" name="product_video" id="video_product" class="form-group">
                </div>
                <div class="form-group mt-2">
                    <input type="submit" name="submit" value="Add Product" class="btn btn-primary">
                </div>

            </form>
            <!-- </div> -->
        </div>




    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php unset($_SESSION['success']);
unset($_SESSION['error']) ?>