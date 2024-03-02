<?php
require_once __DIR__ . "/adminHeader.php";
require_once __DIR__ . "/../public/adminproduct.classes.php";
require_once __DIR__ . "/../public/adminproductview.contr.php";
$is_product = 0;
$rows = new AdminProductViewContr($is_product);
$rows = $rows->displayProducts2();

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
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
                            <th>Description</th>
                            <th>Price</th>
                            <th>Unit</th>
                            <th>Info</th>
                            <th>Category</th>
                            <th>Delete</th>
                            <th>Edit</th>
                            <th>Photo</th>
                            <th>Related Image</th>
                            <th>Applied</th>
                        </tr>
                    </thead>
                    <!-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Image</th>

                        </tr>
                    </tfoot> -->
                    <tbody>
                        <?php
                        foreach ($rows as $row) :

                        ?>
                            <tr>

                                
                                <td><?= $row['product_name'] ?></td>
                                <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#productDescription">View <i class="fa fa-eye"></i< /button>
                                </td>
                                <div class="modal fade" id="productDescription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Product Description</h5>
                                                <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <?= $row['product_description'] ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                <!-- <button type="submit" name="submit" class="btn btn-primary">Add Product</button> -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <td>$<?= $row['product_price'] ?></td>
                                <td><?= $row['product_unit'] ?></td>
                                <td class="info"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">View <i class="fa fa-eye"></i></button></td>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Product Information</h5>
                                                <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <?= $row['product_info'] ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                <!-- <button type="submit" name="submit" class="btn btn-primary">Add Product</button> -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
<td><?= $row['product_category']?></td>
                                <td><a href="delete.inc.php?id=<?= $row['id']; ?>" class="btn-del btn btn-danger">Delete</a></td>
                                <td><a href="edit_product.php?id=<?= $row['id']; ?> m=1" class="btn-del btn btn-warning">Edit</a></td>
                                <td><img style="width:150px; height:150px;" src="../inc/uploads/<?= $row['product_image'] ?>" alt=""></td>
                                <td><img style="width:150px; height:150px;" src="../inc/uploads/<?= $row['related_image'] ?>" alt=""></td>
                                <td><img style="width:150px; height:150px;" src="../inc/uploads/<?= $row['applied_image'] ?>" alt=""></td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
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
            <span>Copyright &copy; Your Website 2020</span>
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
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
<script src="../assets/bootstrap/bootstrap.js"></script>

</body>

</html>