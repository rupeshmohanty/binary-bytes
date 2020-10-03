<?php
    include('../config.php');
    session_start();
    $name = mysqli_escape_string($con,strip_tags($_POST['name']));
    $email = mysqli_escape_string($con,strip_tags($_POST['email']));
    $contact = mysqli_escape_string($con,strip_tags($_POST['contact']));
    $services = mysqli_escape_string($con,strip_tags($_POST['services']));

    //sql query
    $details = "INSERT INTO project(name,email,contact,services) VALUES('$name','$email','$contact','$services');";
    $details_result = mysqli_query($con,$details) or die(mysqli_error($con));
    $_SESSION["status"] = "submitted";
    $_SESSION["msg"] = "Congratulations your response has been recorded";
    header('Location:index.php');
?>
