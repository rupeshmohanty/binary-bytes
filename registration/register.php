<?php
    include('../config.php');
    session_start();
    $name = mysqli_escape_string($con,strip_tags($_POST['name']));
    $username = mysqli_escape_string($con,strip_tags($_POST['username']));
    $email = mysqli_escape_string($con,strip_tags($_POST['email']));
    $password = mysqli_escape_string($con,strip_tags($_POST['password']));
    $password2 = mysqli_escape_string($con,strip_tags($_POST['password']));
    $protected_password = md5($password);

    //To check if the user already exists or not
    $duplicate = "SELECT * FROM register WHERE email = '$email'";
    $duplicate_result = mysqli_query($con,$duplicate) or die(mysqli_error($duplicate));
    if (mysqli_num_rows($duplicate_result) == 1) {
        $_SESSION["status"] = "error";
        $_SESSION["msg"] = "User already exists!";
        header('Location:index.php');
    }else{
        if(strcmp($password,$password2)!=0){
            $_SESSION["status"] = "error";
            $_SESSION["msg"] = "Password fields dont match!";
            header('Location:index.php');
        }
        else{
            $_SESSION["status"] = "success";
            $_SESSION["msg"] = "User successfully registered!";
            $register="INSERT INTO register(name,username,email,password) VALUES('$name','$username','$email','$protected_password')";
            $register_result=mysqli_query($con,$register) or die(mysqli_error($con));
            header('Location:index.php');
        }
    }
?>