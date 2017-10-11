<?php
include ('connection.php');

$selection_query = "SELECT sku, product_name, description, category, cost, price, product_image, size, weight
                FROM Products";

$selection_result = $mysqli->query($selection_query);
if( !$selection_result)
    die($mysqli->error);
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">Swathe</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

        <ul class="right hide-on-med-and-down">
            <li><a href="#"><i class="material-icons left">search</i></a></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="catalog.php">Catalog</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="client.php">User</a></li>
            <li><a href="admin.php">Admin</a></li>

        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="home.php">Home</a></li>
            <li><a href="catalog.php">Catalog</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="client.php">User</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>
    </div>
</nav>







<div class="row">
    <div class="col l12 center">
        <h1>Cart</h1>
    </div>
</div>

<hr>
<!--Shipping Info Form -->

<!-- Shipping Info -->
<div class="row container">
    <div class="col l6 center">
        <h2>Shipping Information</h2>
    </div>
    <div class="col l6 center">
        <h2>Payment Info</h2>
    </div>
</div>

<form class="row container">
    <div class="row">
        <div class="input-field col l3">
            <input id="fname_shipping" type="text" class="validate">
            <label for="fname_shipping">First Name</label>
        </div>
        <div class="input-field col l3">
            <input id="lname_shipping" type="text" class="validate">
            <label for="lname_shipping">Last Name</label>
        </div>
        <div class="col l6 center">
            <img height="67" width="300" src="img/visa_master.png" alt="visa/mastercard">
        </div>

    </div>
    <div class="row">
        <div class="input-field col l6">
            <input id="Street" type="text" class="validate">
            <label for="Street">Street</label>
        </div>
        <div class="input-field col l3 push-l1 center">
            <input id="card_number" type="text" class="validate">
            <label for="card_number">Card Number</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col l6">
            <input id="Apt." type="text" class="validate">
            <label for="Apt.">Apt.</label>
        </div>
        <div class="input-field col l3 push-l1 center">
            <input id="expiration" type="text" class="validate">
            <label for="expiration">Expiration Date</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col l3">
            <input id="City/Town" type="text" class="validate">
            <label for="City/Town">City/Town</label>
        </div>
        <div class="input-field col l3">
            <input id="State" type="text" class="validate">
            <label for="State">State</label>
        </div>
        <div class="input-field col l3 push-l1 center">
            <input id="csv" type="text" class="validate">
            <label for="csv">CSV</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col l6">
            <input id="zip_code" type="number" class="validate">
            <label for="zip_code">Zip Code</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col l6">
            <input id="phone_number" type="number" class="validate">
            <label for="phone_number">Phone Number</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col l6">
            <input id="email_address" type="email" class="validate">
            <label for="email_address">Email Address</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col l6">
            <input name="billing/ship_same" type="radio" id="shipping/bill_same" />
            <label for="shipping/bill_same">Billing Same as Shipping</label>
        </div>
    </div>
</form>
<hr>
<!-- Order Summary -->
<div class="row container">
    <div class="col l6 orderSummary_container">
        <div class="row container">
            <div class="col l12">
                <h5>Order Summary</h5>
            </div>
            <hr>
            <div class="row">
                <div class="col l6">
                    <p>1 item</p>
                </div>
                <div class="col l6">
                    <p>$20</p>
                </div>
            </div>
            <div class="row">
                <div class="col l6">
                    <p>Shipping</p>
                </div>
                <div class="col l6">
                    <p>Free</p>
                </div>
            </div>
            <div class="row">
                <div class="col l6">
                    <p>Total</p>
                </div>
                <div class="col l6">
                    <p>$20</p>
                </div>
            </div>
            <div class="row">
                <div class="col l6">
                    <a class="waves-effect waves-light btn z-depth-3">Checkout</a>
                </div>


                <div class="col l6">
                    <a class="waves-effect waves-light btn z-depth-3">Edit</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col l6 logIn_container center">
        <div class="row">
            <div class="col l12">
                <h5>Sign In</h5>
            </div>
        </div>
        <div class="row">
            <div class="col l12">
                <input placeholder="Username" id="username" type="text" class="validate">
            </div>
        </div>
        <div class="row">
            <div class="col l12">
                <input placeholder="Password" id="password" type="text" class="validate">
            </div>
        </div>
        <div class="row">
            <div class="col l6">
                <a class="waves-effect waves-light btn z-depth-3">Log In</a>
            </div>
            <div class="col l6">
                <a class="waves-effect waves-light btn z-depth-3">Password</a>
            </div>
        </div>
    </div>
</div>

<hr>
<!--Footer Section -->
<div class="row">
    <form class="col s12">
        <div class="row">
            <div class="col l12">
                <h4>Contact Us</h4>
            </div>
            <div class="input-field col l3">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
            </div>
            <div class="col l3 right">
                <h4>Company Information</h4>
                <p>Phone: (555)555-5555</p>
                <p>Email: swatheclothing@email.com</p>
                <p>Address: 6254 Clothing Street Lane, Orlando FL 32826</p>
            </div>

            <div class="input-field col l3">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
            </div>


            <div class="input-field col l3">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
            <div class="input-field col l8">
                <input id="textArea" type="text" class="validate">
                <label for="textArea">Message</label>
            </div>
        </div>
    </form>
    <div class="col l12 center">
        <p>This site is not official and is an assignment for a UCF Digital Media course. Designed by Frank Schiller</p>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>

</body>
</html>