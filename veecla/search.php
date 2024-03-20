<?php
require_once __DIR__ . "/header.php";

?>
<style>
    section {
        margin-top: 7%;
    }
    @media screen and (max-width:992px) {
        section{
            margin-top: 25%;
        }
    }
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="">
                    <div class="form-group d-flex">
                        <!-- <div class="col-10"> -->
                            <input type="search" name="search" id="search" class="form-control" placeholder="search for our products">
                        <!-- </div> -->
                        <!-- <div class="col-2"> -->
                            <input type="submit" value="Search">
                        <!-- </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
require_once __DIR__ . "/footer.php";
?>