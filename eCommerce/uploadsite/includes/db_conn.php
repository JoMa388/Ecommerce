<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "eCommerce";

$conn = mysqli_connect($serverName, $dbUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}