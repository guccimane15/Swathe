<?php
//mysqli connection
$mysqli = new mysqli("localhost","fr168559","password","fr168559");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
} else {


}