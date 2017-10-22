<?php
include ('connection.php');


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Tipue Search -->
    <link rel="stylesheet" href="tipuesearch/css/tipuesearch.css">
</head>
<body>

<!-- Nav Bar -->

<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">Swathe</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

        <ul class="right hide-on-med-and-down">
            <li><form action="search.php">
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

<div class="row">
    <div class="col l12 center">
        <h2>Admin Panel</h2>
    </div>
</div>
<hr>
<!-- Admin Panel -->

<table class="striped container">
    <thead>
    <tr>
        <th>Category</th>
        <th>Item Name</th>
        <th>Item Price</th>
        <th>Remove</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>Shirts</td>
        <td>Red Shirt</td>
        <td>$20</td>
        <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
    </tr>
    <tr>
        <td>Shirts</td>
        <td>Blue Shirt</td>
        <td>$20</td>
        <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
    </tr>
    <tr>
        <td>Shirts</td>
        <td>Green Shirt</td>
        <td>$20</td>
        <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
    </tr>
    <tr>
        <td>Jackets</td>
        <td>Blue Jacket</td>
        <td>$40</td>
        <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
    </tr>
    <tr>
        <td>Jackets</td>
        <td>Red Jacket</td>
        <td>$40</td>
        <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
    </tr>
    <tr>
        <td>Jackets</td>
        <td>Green Jacket</td>
        <td>$40</td>
        <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
    </tr>
    <tr>
        <td>Pants</td>
        <td>Brown Pants</td>
        <td>$30</td>
        <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
    </tr>
    <tr>
        <td>Pants</td>
        <td>Tan Pants</td>
        <td>$30</td>
        <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
    </tr>
    <tr>
        <td>Pants</td>
        <td>Red Pants</td>
        <td>$30</td>
        <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
    </tr>
    </tbody>
</table>







<hr>


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