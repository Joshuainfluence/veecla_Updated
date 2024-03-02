<?php

require_once __DIR__ . "/header.php";
?>
<div class="container" style="margin-top:10%;">
    <div class="row contain">
        <div class="col-lg-12">
            <h3>FAQS</h3>
            <p>PRODUCTS</p>
            <p>SHIPPING</p>
            <p>ORDERS AND PAYMENTS</p>
            <p>RETURNS AND REFUNDS</p>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Products</h4>
                    <button class="accordion">Are VEECLA’s lipcare product vegan or cruelty free?</button>
                    <div class="panel">
                        <p>Yes, all VEECLA lipcare products are vegan and Crueity free</p>

                    </div>
                    <button class="accordion"> Are all VEECLA lip care products fragrance free?
                    </button>
                    <div class="panel">
                        <p>No, all VEECLA lipcare product are not fragrance free, but Some are available without fragrance</p>

                    </div>
                    <button class="accordion"> Are VEECLA Lipcare product clean?
                    </button>
                    <div class="panel">
                        <p>Yes, we are very clean, your heath is our priority</p>

                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-12">
                    <h4>Shipping</h4>
                    <button class="accordion"> Where do you ship ?</button>
                    <div class="panel">
                        <p>We currently ship nationwide</p>

                    </div>
                    <button class="accordion">How much is shipping?
                    </button>
                    <div class="panel">
                        <p>Shipping costs depends on your location and will be calculated for you after placing your order</p>

                    </div>
                    <button class="accordion"> Do you ship internationally?
                    </button>
                    <div class="panel">
                        <p>Shipping internationally is still processing, we will get back to you shortly</p>

                    </div>
                    <button class="accordion"> Where can i buy VEECLA products in person
                    </button>
                    <div class="panel">
                        <p>>At the moment there is no known place/shop to get it. But we produce in Delta State NIGERIA
                        </p>

                    </div>
                    <button class="accordion"> How long will my orders take to arrive
                    </button>
                    <div class="panel">
                        <p>On average, Delta states orders are delivered within 2-3 working days
                            On average, Orders outside Delta states are delivered within 4-7 working days
                            Note: Orders may arrive earlier or delayed due to series of occurrences from the shipping company</p>

                    </div>
                </div>
            </div>



            <div class="row mt-2">
                <div class="col-lg-12">
                    <h4>Orders and Payments</h4>
                    <button class="accordion"> HOW CAN I CHECK MY ORDER?</button>
                    <div class="panel">
                        <p>You can view your order status on your Account page which is updated as soon as your payment is processed and when your order ships</p>

                    </div>
                    <button class="accordion">Which payment method do you approve
                    </button>
                    <div class="panel">
                        <p>All payment methods (cash, bank transfers, cards) for now are subject to approval</p>

                    </div>
                    <button class="accordion"> WHEN WILL MY CREDIT CARD BE CHARGED?
                    </button>
                    <div class="panel">
                        <p>Your credit card will be charged as soon as your order is processed.</p>

                    </div>
                    <button class="accordion"> I CAN'T LOGIN/FORGOT MY PASSWORD
                    </button>
                    <div class="panel">
                        <p>No sweat, just select the prompt to reset it and save it for next time
                        </p>

                    </div>
                    <button class="accordion"> WHY WAS MY ORDER CANCELLED?
                    </button>
                    <div class="panel">
                        <p>As a new brand, we have Limited amounts of availiablity of Our products for customers to Purchase.</p>

                    </div>
                </div>
            </div>



            <div class="row mt-2">
                <div class="col-lg-12">
                    <h4>Returns and Refunds</h4>
                    <button class="accordion"> WHAT IS YOUR RETURN POLICY?</button>
                    <div class="panel">
                        <p>Email our team at veeclaconcept@gmail.com (please Include your order number) within 30 days of receiving your order, and we'll help you out ASAP with any returns and additional questions.
                            Note: original shipping charges are non-refundable.</p>

                    </div>
                    <button class="accordion"> CAN I CANCEL OR CHANGE AN ORDER?
                    </button>
                    <div class="panel">
                        <p>During times of high order volume we are unable to cancel or edit orders.
                            NOTE: We are not responsible for any address errors or order delays after your package leaves our facility.</p>

                    </div>
                   
                </div>
            </div>


        </div>
    </div>
    <!-- <button class="accordion">Section 1</button>
    <div class="panel">
        <p>Lorem ipsum...</p>
    </div>

    <button class="accordion">Section 2</button>
    <div class="panel">
        <p>Lorem ipsum...</p>
    </div>

    <button class="accordion">Section 3</button>
    <div class="panel">
        <p>Lorem ipsum...</p>
    </div> -->
    <style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            transition: 0.4s;
        }

        /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
        .activly,
        .accordion:hover {
            background-color: #ccc;
        }

        /* Style the accordion panel. Note: hidden by default */
        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .accordion:after {
            content: '\02795';
            /* Unicode character for "plus" sign (+) */
            font-size: 13px;
            color: #777;
            float: right;
            margin-left: 5px;
        }

        .activly:after {
            content: "\2796";
            /* Unicode character for "minus" sign (-) */
        }

        h4 {
            font-weight: 600;
        }
        p{
            font-size: 1.3rem;
        }

        @media screen and (max-width:992px) {
            .container .contain{
                margin-top: 20%;
            }
        }
    </style>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("activly");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
</div>

<?php
require_once __DIR__ . "/subscribe.php";
require_once __DIR__ . "/footer.php";
?>
</body>

</html>