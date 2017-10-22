<?php
include('connection.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
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


<!-- T-shirts Hero img -->

<div class="row">
    <div class="parallax-container">
        <div class="col l12 parallax">
            <img src="img/photo1.jpeg" alt="clothing">
        </div>
        <div class="row">
            <div class="col l12 center shirts-title">
                <h2>Shirts</h2>
            </div>
        </div>
    </div>
</div>

<!-- T-shirts catalog -->

<div class="row">
    <div class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#test1">T-Shirts</a></li>
            <li class="tab col s3"><a href="#test2">Long Sleeve</a></li>
            <li class="tab col s3"><a href="#test3">Tank Tops</a></li>
            <li class="tab col s3"><a href="#test4">Athletic</a></li>
        </ul>
    </div>
    <div id="test1" class="col s12">

        <div class="row">
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/franketee.jpg.jpeg" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Cool Shirt</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/franketee.jpg.jpeg" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Cool Shirt</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/franketee.jpg.jpeg" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Cool Shirt</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/franketee.jpg.jpeg" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Cool Shirt</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Long Sleeves -->

    <div id="test2" class="col s12">

        <div class="row">
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/blue.png" alt="blue_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Cool Shirt</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/blue.png" alt="blue_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Long Shirt</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/blue.png" alt="blue_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Long Shirt</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/blue.png" alt="blue_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Long Shirt</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Tank Tops -->

    <div id="test3" class="col s12">
        <div class="row">
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/green.png" alt="green_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Cool Tank</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/green.png" alt="green_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Cool Tank</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/green.png" alt="green_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Cool Tank</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/green.png" alt="green_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Cool Tank</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Sport Shirt -->

    <div id="test4" class="col s12">
        <div class="row">
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/white.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Sports Shirt</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/white.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Sports Shirt</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/white.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Sports Shirt</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 t-shirt-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/white.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>A Sports Shirt</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Jackets Hero img -->

<div class="row">
    <div class="parallax-container">
        <div class="col l12 parallax">
            <img src="img/jacket.jpg" alt="jackets">
        </div>
        <div class="row">
            <div class="col l12 center shirts-title">
                <h2>Jackets</h2>
            </div>
        </div>
    </div>
</div>

<!-- Jackets catalog -->

<div class="row">
    <div class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#jackets1">Jackets</a></li>
            <li class="tab col s3"><a href="#jackets2">More</a></li>
            <li class="tab col s3"><a href="#jackets3">More</a></li>
            <li class="tab col s3"><a href="#jackets4">More</a></li>
        </ul>
    </div>

    <!-- Summer Jackets -->

    <div id="jackets1" class="col s12">

        <div class="row">
            <div class="col l3 jackets-img-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/franketee.jpg.jpeg" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Summer Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/franketee.jpg.jpeg" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Summer Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/franketee.jpg.jpeg" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Summer Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/franketee.jpg.jpeg" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Summer Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Winter Jackets -->

    <div id="jackets2" class="col s12">

        <div class="row">
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/white.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Winter Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/white.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Winter Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/white.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Winter Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/white.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Winter Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Sports Jackets -->

    <div id="jackets3" class="col s12">
        <div class="row">
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/blue.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Sports Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/blue.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Sports Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/blue.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Sports Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/blue.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Sports Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Designer Jackets -->

    <div id="jackets4" class="col s12">
        <div class="row">
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/green.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Designer Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/green.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Designer Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/green.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Designer Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 jackets-img center">
                <div class="row">
                    <div class="col m12">
                        <img src="img/green.png" alt="red_shirt">
                    </div>
                    <div class="col m12">
                        <h4>Designer Jackets</h4>
                    </div>
                    <div class="col m12">
                        <div class="row">
                            <div class="col m3">
                                <h5>$20</h5>
                            </div>
                            <div class="col m9">
                                <div class="stars right">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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