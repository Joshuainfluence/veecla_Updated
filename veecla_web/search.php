<?php
require_once __DIR__ . "/header.php";

?>
<style>
    section {
        margin-top: 10%;
    }
    @media screen and (max-width:992px) {
        section{
            margin-top: 25%;
        }
    }
</style>
<script src="assets/sweetalert/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search').keyup(function() {
            var name = $("#search").val();
            $.post("searchlist.php", {
                suggestion: name
            }, function(data, status) {
                $("#suggestion").html(data)
            });
        })
    })
</script>
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

                            <button type="submit" id="form-submit" class="main-dark-button">Search</button>
                           
                        <!-- </div> -->
                    </div>
                    <p id="suggestion"></p>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
require_once __DIR__ . "/footer.php";
?>