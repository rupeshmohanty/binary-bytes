<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Binary Bytes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
</head>
<!-- Print Details of person, You want to print -->


<body style="padding: 0px;">
<?php
   session_start();
   include('../config.php');
   $username=$_SESSION['username'];
   $query = "SELECT * FROM register WHERE username = '$username'";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
   while($row = mysqli_fetch_array($result)) {
?>
    <div class="row" style="height: auto;background-color: #388fcd;color: rgb(255,255,255);">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center align-items-center" style="padding: 5vh;"><img class="rounded-circle" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200" style="height: 50vh;"></div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center"
            style="padding: 5vh;height: 70vh;">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title" style="color: rgb(0,0,0);"><?php echo $row['name']?></h1>
                    <h4 class="text-muted card-subtitle mb-2"><?php echo $row['username']?></h4>
                    <h4 class="text-muted card-subtitle mb-2"><?php echo $row['email']?></h4>
                    <h4 class="text-muted card-subtitle mb-2"> Rest Data</h4>
                    <p class="card-text" style="color: rgb(255,255,255);">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, n mi&nbsp;</p>
                </div>
            </div>
        </div>
    </div>

<?php
    }
?>

<!-- Print Details of person, You want to print -->

<br> <br> <br>



<!-- Project details to be printed-->
<?php
    include('../config.php');
    $query = "SELECT * FROM activity WHERE pname = 'Club Website'";// Add the username
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    while($row = mysqli_fetch_array($result)) {
?>


    <div class="row">
        <div class="col d-xl-flex justify-content-xl-center align-items-xl-center">
            <h1 style="font-size: 51px;">Projects With Us</h1>
        </div>
        <br><br>
    </div>
    <div class="row">
        <div class="col">
            <div>
                <div class="container" ">
                    <div class="row">
                        <div class="col-md-4 cust_blogteaser" style="border:5px solid rgba(0,0,0,0.5);padding:5px;"><a href="#"><img class="img-fluid" src="../assets/img/project.jpg"></a>
                            <h3><?php echo $row['pname'];?></h3>
                            <ul>
                                <?php foreach(explode(",",$row['parts']) as $value){
                                    echo "<li>".$value ."</li>";
                                 } 
                                ?>
                            </ul>
                            Date: <?php echo $row['date'] ?> <br>
                            Completed: <?php echo $row['completion'] ?> <br>
                            <a class="h4" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    
    }
    
    ?>

    <!-- Project details to be printed-->



    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1>Work with Us in another project?</h1>
                <p></p>
                <p><a class="btn btn-primary" role="button">Learn more</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>