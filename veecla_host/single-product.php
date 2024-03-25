<?php
require_once __DIR__ . "/header.php";
require_once __DIR__ . "/config/session.php";
$userid = $_SESSION['id'];
?>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div class="page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Single Product Page</h2>
                    <!-- <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->


<!-- ***** Product Area Starts ***** -->
<section class="section" id="product">
    <?php
    require_once __DIR__ . "/public/product.classes.php";
    require_once __DIR__ . "/public/productcategory.contr.php";
    $id = $_GET['id'];
    $rows = new ProductCategoryContr($id);
    $rows = $rows->productSingle();
    foreach ($rows as $row) :
        $value = $row['id'];
    ?>

        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="video">
                        <video autoplay="playback" loop controls src="assets/video/Download (16).mp4" style="width: 100%; height:300px;"></video>
                    </div>
                </div>
            </div> -->
            <div class="row">

                <div class="col-lg-6">
                    <table>
                        <div class="table table-responsive">
                            <div class="tr text-dark fw-bold">
                                <td class="col-4">
                                    <img src="inc/uploads/<?= $row['product_image'] ?>" width="100" height="100" alt="Nature" onclick="myFunction(this);">
                                </td>
                                <td class="col-4">
                                    <img src="inc/uploads/<?= $row['related_image'] ?>" width="100" height="100" alt="Nature" onclick="myFunction(this); ">
                                </td>
                                <td class="col-4">
                                    <img src="inc/uploads/<?= $row['applied_image'] ?>" width="100" height="100" alt="Nature" onclick="myFunction(this);">
                                </td>
                                <!-- <td class="col-3">
                                <img src="assets/images/003.jpg" width="100" height="100" alt="Nature" onclick="myFunction(this);">
                            </td> -->
                            </div>
                        </div>
                    </table>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="showPicture">

                        <!-- <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span> -->

                        <!-- Expanded image -->
                        <img id="expandedImg" style="width:100%" height="500px">

                    </div>
                    <!-- styling the display of images -->
                    <style>
                        .showPicture {
                            position: relative;
                            display: block;
                        }

                        #imgtext {
                            position: absolute;
                            bottom: 15px;
                            left: 15px;
                            color: white;
                            font-size: 20px;
                        }

                        /* Closable button inside the image */
                        /* .closebtn {
                            position: absolute;
                            top: 10px;
                            right: 15px;
                            color: white;
                            font-size: 35px;
                            cursor: pointer;
                        } */
                    </style>
                    <!-- end the styling -->

                    <!-- javascript for the image display -->
                    <script>
                        function myFunction(imgs) {
                            // Get the expanded image
                            var expandImg = document.getElementById("expandedImg");
                            // Get the image text
                            var imgText = document.getElementById("imgtext");
                            // Use the same src in the expanded image as the image being clicked on from the grid
                            expandImg.src = imgs.src;
                            // Use the value of the alt attribute of the clickable image as text inside the expanded image
                            imgText.innerHTML = imgs.alt;
                            // Show the container element (hidden with CSS)
                            expandImg.parentElement.style.display = "block";
                        }
                    </script>
                    <!-- end javascript -->
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 mt-3 d-flex justify-content-center align-items-center">
                            <select name="" id="" class="form-control">

                                <?php
                                if ($_SESSION['location'] == "Nigeria") {
                                ?>
                                    <option value="">Delta</option>
                                    <option value="">Benin</option>
                                    <option value="">Jos</option>
                                <?php
                                } elseif ($_SESSION['location'] == "Italy") {
                                ?>
                                    <option value="">Itit</option>
                                    <option value="">tobi</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="right-content">

                        <h4><?= ucfirst($row['product_name']) ?></h4>
                        <span class="price">$<?= $row['product_price'] ?></span>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span><?= $row['product_description'] ?>.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p><?= $row['product_info'] ?>.</p>
                        </div>

                        <div class="quantity-content">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-danger">
                                        <?php
                                        if ($row['product_unit'] >= 10) {
                                        ?>
                                            In stock
                                        <?php
                                        } else {
                                        ?>
                                            <?= $row['product_unit'] ?> Units left
                                        <?php
                                        }
                                        ?>
                                    </h5>
                                </div>
                            </div>
                            <div class="left-content">
                                <h6>No. of Orders</h6>
                            </div>
                            <div class="right-content">
                                <div class="quantity buttons_added">
                                    <!-- <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus"> -->




                                    <div class="row">
                                        <label for="" class="fw-bold fs-2" id="countLabel">0</label>
                                    </div>
                                    <div class="row">
                                        <div class="buttons d-flex">
                                            <button id="decrease" class="button-cart-alt3">-</button>
                                            <button id="one" class="button-cart-alt3">1</button>
                                            <button id="increase" class="button-cart-alt3">+</button>
                                        </div>
                                        <script>
                                            let count = 0;
                                            let price = <?= $row['product_price'] ?>; // Assuming $row['product_price'] holds the product price

                                            function updateTotal() {
                                                let total = count * price;
                                                document.getElementById("totalPrice").innerHTML = "$" + total.toFixed(2); // Displaying total with 2 decimal places
                                                // sessionStorage.setItem('product_quantity', count);

                                                // let xhr = new XMLHttpRequest();
                                                // xhr.open("POST", "inc/cart.inc.php", true);
                                                // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                                // xhr.onreadystatechange = function() {
                                                //     if (xhr.readyState === 4 && xhr.status === 200) {
                                                //         // Response from PHP script
                                                //         console.log(xhr.responseText);
                                                //     }
                                                // };
                                                // xhr.send("count=" + count);

                                            }


                                            document.getElementById("decrease").onclick = function() {
                                                count = Math.max(0, count - 1); // Ensure count doesn't go negative
                                                document.getElementById("countLabel").innerHTML = count;
                                                updateTotal();
                                            }

                                            document.getElementById("one").onclick = function() {
                                                count = 1;
                                                document.getElementById("countLabel").innerHTML = count;
                                                updateTotal();
                                            }

                                            document.getElementById("increase").onclick = function() {
                                                count += 1;
                                                document.getElementById("countLabel").innerHTML = count;
                                                updateTotal();
                                            }



                                            // Initial update of total
                                            updateTotal();
                                            // sessionStorage.setItem('product_quantity', count);
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="total">
                            <h4 id="totalPrice">$<?= $row['product_price'] ?></h4>



                            <?php
                            require_once __DIR__ . "/public/cart.classes.php";
                            require_once __DIR__ . "/public/cartSelect.contr.php";
                            $productId = $row['id'];
                            $carts = new ProductExistContr($productId, $userid);
                            $isProductInCart = $carts->existProduct();

                            // Check if $isProductInCart is defined and not empty
                            if (isset($isProductInCart) && !empty($isProductInCart)) {
                            ?>
                                <div class="main-border-button">
                                    <p>Already Added</p>
                                </div>
                            <?php } else { ?>
                                <div class="main-border-button">
                                    <script>
                                        console.log(updateTotal)
                                    </script>
                                    <a id="addToCartBtn" href="#">Add To Cart</a>

                                    <script>
                                        document.getElementById("addToCartBtn").addEventListener("click", function() {
                                            // Get the product quantity
                                            var productQuantity = document.getElementById("countLabel").innerHTML;
                                            // Get the product ID
                                            var productId = <?= $productId ?>;
                                            // Construct the URL with the product ID and quantity
                                            var url = "inc/cart.inc.php?id=" + productId + "&quantity=" + productQuantity;
                                            // Redirect to the backend script with the correct URL
                                            window.location.href = url;
                                        });
                                    </script>


                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <video autoplay controls loop src="inc/uploads/<?= $row['product_video'] ?>" style="width: 100%; height:100%;"></video>
                </div>
                <div class="col-lg-6">
                    <video autoplay loop muted src="assets/video/Download (16).mp4" style="width: 100%; height:100%;" autoplay="true"></video>
                </div>
            </div>
        </div>
    <?php endforeach ?>

</section>


<!-- ***** Product Area Ends ***** -->

<!-- ***** Footer Start ***** -->
<?php
require_once __DIR__ . "/footer.php";
?>

</body>

</html>