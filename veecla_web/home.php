<?php
require_once __DIR__ . "/header.php";
require_once __DIR__ . "/config/session.php";

?>

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- <li class="scroll-to-section" id="google_translate_element"></li>
                <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                <script>
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({
                                pageLanguage: 'en'
                            },
                            'google_translate_element'
                        );
                    }
                </script> -->

            </div>
        </div>
        <div class="row">

            <div class="col-lg-6">
                <div class="left-content">
                    <div class="thumb">
                        <div class="inner-content">
                            <h4>We Are VeeclaShop</h4>
                            <h4></h4>
                            <span>Realising true beauty <br><?= $_SESSION['location'] ?></span>

                            <div class="main-border-button">
                                <a href="#">Purchase Now!</a>
                            </div>
                        </div>
                        <img src="assets/images/home.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Lip & Skin Care</h4>
                                        <span>Latest product On Lip and Skin Care </span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Lip care</h4>
                                            <!-- <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p> -->
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/003.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Fragrance</h4>
                                        <span>Best product on Fragrance</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Fragrance</h4>
                                            <!-- <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p> -->
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/003.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Fashion</h4>
                                        <span>Best product on Fashion</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Fashion</h4>
                                            <!-- <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p> -->
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/003.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Accessories</h4>
                                        <span>Best Trend Accessories</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Accessories</h4>
                                            <!-- <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p> -->
                                            <div class="main-border-button">
                                            <a href="#">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/003.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Men Area Starts ***** -->
<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Lip & Skincare</h2>
                    <span>Details to details is what makes veecla different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                        <!-- this is the loop for the category-->
                        <?php
                        require_once __DIR__ . "/public/product.classes.php";
                        require_once __DIR__ . "/public/productcategory.contr.php";
                        $category = "lipcare";
                        $rows = new ProductCategoryContr($category);
                        $rows = $rows->categoryProduct();

                        ?>
                        <?php
                        if (count($rows, COUNT_NORMAL) == 0) {
                        ?>
                        <!-- <p>No product added to this category yet</p> -->
                        <?php
                        } else {
                        ?>
                            <?php

                            foreach ($rows as $row) : ?>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="single-product.php?id=<?= $row['id'] ?>"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                                <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="inc/uploads/<?= $row['product_image'] ?>" alt="" style="width:100%; height:300px;">
                                    </div>
                                    <div class="down-content">
                                        <h4>Lip care</h4>
                                        <span>$<?= $row['product_price'] ?></span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php
                        }
                        ?>

                        <!-- Ending of the loop-->



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Men Area Ends ***** -->

<!-- ***** Women Area Starts ***** -->
<section class="section" id="fragrance">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Fragrane</h2>
                    <span>Details to details is what makes VeeclaShop different from the other Companies.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="women-item-carousel">
                    <div class="owl-women-item owl-carousel">
                        <!-- this is the loop for the category-->
                        <?php
                        require_once __DIR__ . "/public/product.classes.php";
                        require_once __DIR__ . "/public/productcategory.contr.php";
                        $category = "skincare";
                        $rows = new ProductCategoryContr($category);
                        $rows = $rows->categoryProduct();
                        foreach ($rows as $row) :
                        ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php?id=<?= $row['id'] ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.php?id=<?= $row['id'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="inc/uploads/<?= $row['product_image'] ?>" alt="" style="width:100%; height:300px;">
                                </div>
                                <div class="down-content">
                                    <h4>Lip care</h4>
                                    <span>$<?= $row['product_price'] ?></span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach ?>

                        <!-- Ending of the loop-->



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Women Area Ends ***** -->

<!-- ***** Kids Area Starts ***** -->
<section class="section" id="fashion">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Fashion</h2>
                    <span>Details to details is what makes VeeclaShops different from the other cmompanies.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="kid-item-carousel">
                    <div class="owl-kid-item owl-carousel">
                        <!-- this is the loop for the category-->
                        <?php
                        require_once __DIR__ . "/public/product.classes.php";
                        require_once __DIR__ . "/public/productcategory.contr.php";
                        $category = "liptreat";
                        $rows = new ProductCategoryContr($category);
                        $rows = $rows->categoryProduct();
                        foreach ($rows as $row) :
                        ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php?id=<?= $row['id'] ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.php?id=<?= $row['id'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="inc/uploads/<?= $row['product_image'] ?>" alt="" style="width:100%; height:300px;">
                                </div>
                                <div class="down-content">
                                    <h4>Lip care</h4>
                                    <span>$<?= $row['product_price'] ?></span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach ?>

                        <!-- Ending of the loop-->



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Kids Area Ends ***** -->


<!-- ***** Women Area Starts ***** -->
<section class="section" id="accessories">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Accessories</h2>
                    <span>Details to details is what makes VeeclaShop different from the other companies.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="women-item-carousel">
                    <div class="owl-women-item owl-carousel">
                        <!-- this is the loop for the category-->
                        <?php
                        require_once __DIR__ . "/public/product.classes.php";
                        require_once __DIR__ . "/public/productcategory.contr.php";
                        $category = "accessories";
                        $rows = new ProductCategoryContr($category);
                        $rows = $rows->categoryProduct();
                        foreach ($rows as $row) :
                        ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php?id=<?= $row['id'] ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.php?id=<?= $row['id'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="inc/uploads/<?= $row['product_image'] ?>" alt="" style="width:100%; height:300px;">
                                </div>
                                <div class="down-content">
                                    <h4>Lip care</h4>
                                    <span>$<?= $row['product_price'] ?></span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach ?>

                        <!-- Ending of the loop-->



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Women Area Ends ***** -->

<!-- ***** video Area Ends ***** -->
<section class="section" id="accessories">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Accessories</h2>
                    <span>Details to details is what makes Veeclashop different from the other companies.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="women-item-carousel">
                    <div class="owl-women-item owl-carousel">
                        <!-- this is the loop for the category-->
                        <?php
                        require_once __DIR__ . "/public/product.classes.php";
                        require_once __DIR__ . "/public/productcategory.contr.php";
                        $category = "accessories";
                        $rows = new ProductCategoryContr($category);
                        $rows = $rows->categoryProduct();
                        foreach ($rows as $row) :
                        ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php?id=<?= $row['id'] ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.php?id=<?= $row['id'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <video controls src="assets/video/Download (16).mp4" alt="" style="width:100%; height:300px;"></video>
                                </div>
                                <div class="down-content">
                                    <h4>Lip care</h4>
                                    <span>$<?= $row['product_price'] ?></span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach ?>

                        <!-- Ending of the loop-->



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** video Area Ends ***** -->

<!-- ***** Explore Area Starts ***** -->
<section class="section" id="explore">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <h2>Explore Our Products</h2>
                    <span>Welcome to Veecla, your ultimate destination for all things lip gloss and skincare! Dive into our exquisite collection and discover a world of beauty and wellness at your fingertips..</span>

                    <p>Indulge in the luxury of radiant lips with our stunning range of lip glosses. From shimmering shades to glossy finishes, Veecla offers a diverse selection to suit every mood and occasion. Let your lips steal the spotlight and make a statement wherever you go..</p>
                    <p>Elevate your skincare routine to new heights with our premium skincare products. Explore our curated selection of cleansers, moisturizers, serums, and more, formulated to nourish and rejuvenate your skin. Say goodbye to dullness and hello to glowing, radiant skin with Veecla.</p>
                    <p>
                        At Veecla, we believe in the power of self-care. Pamper yourself with our luxurious skincare treatments and experience the transformative effects firsthand. From indulgent face masks to soothing creams, our products are designed to enhance your natural beauty and boost your confidence.

                        With Veecla, beauty is more than skin deep. Our commitment to quality and excellence ensures that every product is carefully crafted to deliver exceptional results. Whether you're a beauty enthusiast or a skincare novice, Veecla has something for everyone.

                        Join us on a journey of beauty and self-discovery. Explore our collection today and unlock the secrets to healthy, radiant skin and luscious lips with Veecla.
                    </p>
                    <div class="main-border-button">
                        <a href="products.html">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="leather">
                                <h4>Lip glozzy</h4>
                                <span>Latest Collection</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="first-image">
                                <img src="assets/images/002.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="second-image">
                                <img src="assets/images/003.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="types">
                                <h4>Different Types</h4>
                                <span>Over 304 Products</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Explore Area Ends ***** -->

<!-- ***** Social Area Starts ***** -->
<section class="section" id="social">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Social Media</h2>
                    <span>View our products and posts on social media.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row images">

            <?php
            require_once __DIR__ . "/public/socials.classes.php";
            require_once __DIR__ . "/public/socials.contr.php";
            $id = 0;
            $rows = new SocialDisplayContr($id);
            $rows = $rows->displaySocials();
            foreach ($rows as $row) :
            ?>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com" target="_blank">
                                <h6><?= $row['topic'] ?></h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="inc/socialUploads/<?= $row['postImage'] ?>" alt="">
                    </div>
                </div>
            <?php
            endforeach
            ?>

            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>New</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-02.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>New</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-02.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>New</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-02.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Brand</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-03.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Makeup</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-04.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Leather</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-05.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Bag</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-06.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Social Area Ends ***** -->

<!-- ***** email subscription starts here **** -->
<?php
require_once __DIR__ . "/subscribe.php";
?>
<!-- ***** Subscribe Area Ends ***** -->

<?php
require_once __DIR__ . "/footer.php";
?>
</body>

</html>