<?php
    include('../config.php');
    session_start();
    $username = mysqli_escape_string($con,strip_tags($_POST['username']));
    $password = mysqli_escape_string($con,strip_tags($_POST['password']));
    $login = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $login_result = mysqli_query($con,$login) or die(mysqli_error($con));
    if (mysqli_num_rows($login_result) > 0) {
        $_SESSION["status"] = "logged";
        $_SESSION["msg"] = "You have logged in successfully!";
        header('Location : profile.php');
    } else {
        $_SESSION["status"] = "error2";
        $_SESSION["msg"] = "Login unsuccessful!";
        header('Location : index.php');
    }
?>