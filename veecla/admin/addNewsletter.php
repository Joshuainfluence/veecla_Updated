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
        <h1 class="h3 mb-0 text-gray-800">Create Newsletter</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-12">
            <!-- <div class="card"> -->
            <form action="../inc/product.inc.php" method="POST" enctype="multipart/form-data">
                <div class="form-group mt-2">
                    <label for="newsTitle">
                        <h5>Topic</h5>
                    </label>
                    <input type="text" name="newsTitle" id="newsTitle" class="form-control" placeholder="Enter Title">
                </div>
                
                <div class="form-group mt-2">
                    <label for="newsContent">
                        <h5>Content</h5>
                    </label>
                    <input type="text" name="newsContent" id="newsContent" class="form-control " placeholder="Enter Product unit">
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
                    <input type="submit" name="submit" value="Send" class="btn btn-primary">
                </div>

            </form>
            <!-- </div> -->
        </div>




    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- footer -->
<?php 
require_once __DIR__. "/adminFooter.php";
?>