<?php
include 'acadmia/connection.php';
//error_reporting(0);
if(isset($_POST['submit'])){

$name=$_POST['name'];
$msg=$_POST['msg'];
$mail = $_POST['mail'];
$sub= $_POST['sub'];



//connecting to dabase databasename.tablename
$sql="INSERT INTO`universalearn`.`contact` (`name`, `msg`, `mail`,`sub`) 
VALUES ('$name','$msg', '$mail', '$sub');";

//echo  $sql;
//backside require to store data in database

if($conn->query($sql)==true){
    echo "<script>alert(' Thank You for Giving Your Feedback');</script>";

}
else{
    echo "ERROR: $sql <br> $conn->error";
}

//$conn->close();

}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UniversaLearn</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
     <link href="acadmia/css/styleup.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/styleup.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- style CSS -->
   
</head>

<body>
    <?php
    include 'nav.php';
    ?>
   

    
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Give Your Feedback</h2>
                            <p>Home<span>/</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="http://blog.stackfindover.com/" rel="dofollow">UniversaLearn</a></h1>
        </div>

    <div class="formbg-outer">
          <div class="formbg">
    <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Give Feedback</span>
             
 
    <form id="stripe-login"action="contact.php" method="POST">
               
                 
    <div  class="field padding-bottom--24">
                    <label for="">Enter Message</label>
                    <textarea type="text"id="msg" name="msg"cols="30" rows="9" placeholder='Enter Message'> </textarea>
                  </div>
            
                <div  class="field padding-bottom--24">
                  <label for="">name</label>
                  <input type="text" id="name"name="name"> 
                </div>
                
                <div  class="field padding-bottom--24">
                    <label for="">Enter Email</label>
                    <input type="email"id="mail" name="mail"> 
                  </div>
            
                <div  class="field padding-bottom--24">
                  <label for="">Subject</label>
                  <input type="text" id="sub"name="sub"> 
                </div>
                  
                  
                  
                
               
                 
        
            
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Send">
                </div>
                
              </form>
              </div>
          </div>
          <div class="footer-link padding-top--24">
            <span> <a href=""></a></span>
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#"></a></span>
              <span><a href="#"></a></span>
              <span><a href="#"></a></span>
            </div>
            <footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <a href="index.html"> <img src="img/logo.png" alt=""> </a>
                    <p>At UniversaLearn, our mission is simple yet profound: to democratize education and make quality learning accessible to all.</p>
                 
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="single-footer-widget footer_2">
                    <h4>Newsletter</h4>
                    <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                    </p>
                   
                    <div class="social_icon">
                        <a href="#"> <i class="ti-facebook"></i> </a>
                        <a href="#"> <i class="ti-twitter-alt"></i> </a>
                        <a href="#"> <i class="ti-instagram"></i> </a>
                        <a href="#"> <i class="ti-skype"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-4">
                <div class="single-footer-widget footer_2">
                    <h4>Contact us</h4>
                    <div class="contact_info">
                        <p><span> Address :</span>Nashik-423401, Maharashtra </p>
                        <p><span> Phone :</span> Tel office +9123536462</p>
                        <p><span> Email : </span>
                        
                        universalearn@team.com </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
            <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>


</body>
</html>