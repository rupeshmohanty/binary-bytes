<?php
    include('../config.php');
    session_start();
    $username = mysqli_escape_string($con,strip_tags($_POST['username']));
    $password = mysqli_escape_string($con,strip_tags($_POST['password']));
    $protected_password = md5($password);
    $login = "SELECT * FROM register WHERE username = '$username' AND password = '$protected_password'";
    $login_result = mysqli_query($con,$login) or die(mysqli_error($con));
    if ( mysqli_num_rows($login_result) == 0 ) {
        header('Location:index.php');
        $_SESSION["status"] = "error2";
        $_SESSION["msg"] = "Login unsuccessful!";
    } else {
        $_SESSION["status"] = "logged";
        $_SESSION["msg"] = "User logged in successfully!";
        header('Location:profile.php');
    }
    echo dirname(__FILE__);
?>