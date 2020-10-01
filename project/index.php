<?php
    include('../config.php');
    session_start();
    error_reporting(0);
    $status = $_SESSION["status"];
    $msg = $_SESSION["msg"];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Binary Bytes</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
    <link rel="stylesheet" href="../assets/css/carousel.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/projects.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <style>
      a:hover{
        background-color: rgb(0,166,237) !important;
      }
    </style>
</head>

<body style="padding: 0px;">

    <div class="col-md-4">
        <!--only for some spacing-->
    </div>

    <!--Project details form-->
    <div class="container col-md-4 mt-4">
        <div class="card">
            <div class="card-body">
            <form action="details.php" method="POST" enctype="multipart/form-data">
                <h2>Fill up this form and we will contact you regarding the project!</h2>
                <?php
                if(!empty($status)){
            ?>
            <?php if($status == "submitted") {?>
            <div class="alert alert-primary">
                    <?php echo $msg; ?>
            </div>
            <?php
            }
            ?>
            <?php
                }
            ?>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your email" class="form-control" required> 
                </div>
                <div class="form-group">
                    <label for="contact">Contact No.</label>
                    <input type="number" id="contact" name="contact" placeholder="Your contact no" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="services">Service you are looking for</label>
                    <input type="text" id="services" name="services" class="form-control" required>
                </div>
                <button value="submit">Submit</button>
                <strong class="text-center">To track your progress <a href="../login/">Login here!</a></strong>

            </form>
        </div>
        </div><br/>
        <div style="text-align: center;">
            <button onClick="window.location.href='../index.html'" class="backbtn">Back to the home page</button>
        </div>
    </div>
    

    <div class="col-md-4">
        <!--only for some spacing-->
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
  <script src="../assets/js/script.min.js"></script>
  <script>
    AOS.init();
    </script>

</body>
</html>
