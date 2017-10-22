<?php
include('connection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Tipue Search -->
    <link rel="stylesheet" href="tipuesearch/css/tipuesearch.css">
</head>
<body>

<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">Swathe</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li>
                <form action="search.php">
                    <input type="text" name="q" id="tipue_search_input" list="search">
                </form>

                <datalist id="search">
                    <option>Home</option>
                    <option>Catalog</option>
                    <option>Cart</option>
                    <option>User Profile</option>
                </datalist>
            </li>
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
<!-- Slideshow Section -->

<!--
<div class="row">
    <div class="parallax-container">
        <div class="col l12 parallax">
            <img src="http://placekitten.com/2130/621">
        </div>
        <div class="row container">
            <div class="col l12 center hero-title">
                <h1>Swathe</h1>
            </div>
        </div>
    </div>
</div>
-->

<div class="row slider">
    <ul class="slides z-depth-5">
        <li>
            <img src="img/photo1.jpeg" alt="clothing">
            <div class="caption center-align">
                <h3>Swathe</h3>
                <h5 class="light grey-text text-lighten-3">Lifestyle.</h5>
            </div>
        </li>
        <li>
            <img src="img/photo2.jpeg" alt="watch_image">
            <div class="caption left-align">
                <h3>The New Fall Line</h3>
                <h5 class="light grey-text text-lighten-3">Just In.</h5>
            </div>
        </li>
    </ul>
</div>
<br>
<br>

<!-- Second Section -->
<div class="container">
    <div class="row">
        <div class="col l4  left-box center">

            <img class="responsive-img" src="img/purple.png" alt="purple_shirt">

        </div>

        <div class="col l4 center-box">

            <div class="row">
                <div class="col l12 center">
                    <h4>Shop Now</h4>
                </div>
                <div class="col l12 center">
                    <h5>All your favorite styles</h5>
                </div>
                <div class="col l6 center mens-btn">
                    <a class="waves-effect waves-light btn z-depth-3">Mens</a>
                </div>
                <div class="col l6 center">
                    <a class="waves-effect waves-light btn z-depth-3">Womens</a>
                </div>
            </div>

        </div>

        <div class="col l3 push-l1 right-box">


            <img class="responsive-img" src="img/purple.png" alt="purple_shirt">


        </div>

    </div>
</div>


<!-- Third Section -->
<!--
<div class="container">
    <div class="row">
        <div class="col l4 left-box-caption center">
            <h4>A Product</h4>
            <p>It's really cool</p>
        </div>
        <div class="col l4 push-l4 right-box-caption center">
            <h4>A Product</h4>
            <p>It's really cool</p>
        </div>

    </div>
</div>
-->
<!-- Fourth Section -->
<!--
<div class="row">
    <div class="col l12 bottomSec-bg">
        <div class="container">
            <div class="row bottom-boxes">
                <div class="col l12">
                    <img class="responsive-img" src="https://dummyimage.com/1390x250/000/fff.png">
                </div>

            </div>
        </div>
    </div>
</div>
-->
<div class="row">
    <div class="parallax-container">
        <div class="col l12 parallax">
            <img src="img/photo1.jpeg" alt="clothing">
        </div>
        <div class="row">
            <div class="col l12 center">
                <a class="waves-effect waves-light btn catalog-btn z-depth-3" href="catalog.php">Catalog</a>
            </div>
        </div>
    </div>
</div>

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
<!-- Tipue Search -->
<script src="tipuesearch/tipuesearch_content.js"></script>
<link rel="stylesheet" href="tipuesearch/css/tipuesearch.css">
<script src="tipuesearch/tipuesearch_set.js"></script>
<script src="tipuesearch/tipuesearch.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tipue_search_input').tipuesearch();
    });
</script>
</body>
</html>