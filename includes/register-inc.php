<?php

if (isset($_POST['submit'])) {
    //add database connection
    require 'database.php';

    $username = $_POST['name'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPassword'];

    if (empty($username) || empty($password) || empty($confirmPass)) {
        header("Location: ../register.php?error=emptyfields&name=".$username, true);
        exit();
    } elseif(!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        header("Location: ../register.php?error=invalidusername&name=".$username, true);
        exit();
    }
}
