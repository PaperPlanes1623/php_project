<?php

//db connection
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "mydb";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if(!$conn) {
    die("Database Connection failed");
} 