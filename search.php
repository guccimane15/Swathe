<?php
include ('connection.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
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
<form action="search.php">
    <div class="tipue_search_left"><img src="tipuesearch/search.png" class="tipue_search_icon"></div>
    <div class="tipue_search_right"><input type="text" name="q" id="tipue_search_input" list="search" pattern=".{3,}"
                                           title="At least 3 characters" required></div>
    <div style="clear: both;"></div>
</form>

<datalist id="search">
    <option>Home</option>
    <option>Catalog</option>
    <option>Cart</option>
    <option>User Profile</option>
</datalist>
<div id="tipue_search_content"></div>






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