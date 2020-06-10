<?php
    include('../config.php');
    session_start();
    error_reporting(0);
    $status = $_SESSION["status"];
    $msg = $_SESSION["msg"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <style>
        .backbtn{
            width: 20% !important;
        }
        @media only screen and (max-width: 768px){
            .backbtn{
                width: 60% !important;
            }
        }
        body{
            height: 100vh !important;
        }
    </style>
    <script>
        document.getElementById('button').style.border = "1px solid blue";
    </script>
</head>
<body>
    <div class="col-md-4">
        <!--Just for spacing-->
    </div>
    <!--Login page-->
    <div class="container col-md-4">
        <div class="card">
                <div class="card-body">
                    <h2 style="text-align: center;text-shadow: 2px 2px #000000;">Login</h2>
                    <?php
                        if(!empty($status)){
                    ?>
                    <?php
                        if($status == "logged") {
                    ?>
                    <div class="alert alert-danger"><?php echo $msg; ?></div>
                    <?php
                        }
                    ?>
                    <?php
                        if ($status == "error2") {
                    ?>
                    <div class="alert alert-primary"><?php echo $msg; ?></div>
                    <?php
                        }
                    ?>
                    <?php
                        }
                    ?>
                    <form action="login.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Your username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                            <button type="submit" id="button" class="mt-4">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div><br/>
    <div style="text-align: center;">
        <button onClick="window.location.href='../index.html'" class="backbtn">Back to the home page</button>
    </div>
    </div>
<div class="col-md-4">
    <!--Just for some spacing-->
</div>

<!--Scripts-->
<script src="../assets/js/invalid_msg.js"></script>
</body>
</html>