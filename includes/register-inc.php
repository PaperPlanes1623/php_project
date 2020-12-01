<?php

if(isset($_POST['submit'])) {
    //add database connection
    require 'database.php';

    $username = $_POST['name'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPassword'];
}