<?php

use Hyper\Hyper;

$host = "remotemysql.com:3306";
$username = "JCGWYqJ9jz";
$password = "cdRIfn8Sxb";
$database = "JCGWYqJ9jz";
$con_status = "inactive";

$connect = new mysqli($host, $username, $password, $database);
// Checking Connection
if (mysqli_connect_errno()) {
    printf("Database connection failed: %s\n", mysqli_connect_error());
    exit();
} else {
    $con_status = "active";
}

require "./hyper.php";

$hyper = new Hyper($connect, "SQL");
