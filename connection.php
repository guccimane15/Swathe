<?php
//mysqli connection
$mysqli = new mysqli("sulley.cah.ucf.edu", "fr168559", "BlockHead101!", "fr168559");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
} else {


}