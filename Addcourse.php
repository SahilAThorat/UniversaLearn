

<?php

include('acadmia/connection.php');
//error_reporting(0);

if(isset($_POST["submit"])){
  $cname = $_POST["cname"];
  $descr = $_POST["descr"];
  $core = $_POST["core"];
  $vlink = $_POST["vlink"];
 

  //For uploads photos
  $upload_dir = "uploads/"; //this is where the uploaded photo stored
  $imag= $upload_dir.$_FILES["imag"]["name"];
  $upload_dir.$_FILES["imag"]["name"];
  $upload_file = $upload_dir.basename($_FILES["imag"]["name"]);
  $imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION)); //used to detected the image format
  $check = $_FILES["imag"]["size"]; // to detect the size of the image
  $upload_ok = 0;

  if(file_exists($upload_file)){
      echo "<script>alert('The file already exist')</script>";
      $upload_ok = 0;
  }else{
      $upload_ok = 1;
      if($check !== false){
        $upload_ok = 1;
        if($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == 'gif'){
            $upload_ok = 1;
        }else{
            echo '<script>alert("please change the image format")</script>';
        }
      }else{
          echo '<script>alert("The photo size is 0 please change the photo ")</script>';
          $upload_ok = 0;
      }
  }

  if($upload_ok == 0){
     echo '<script>alert("sorry your file is doesn\'t uploaded. Please try again")</script>';
  }else{
      if($cname != "" && $descr !=""){
          move_uploaded_file($_FILES["imag"]["tmp_name"],$upload_file);

          $sql = "INSERT INTO cources(cname,descr,core,vlink,imag)
          VALUES('$cname','$descr','$core','$vlink','$imag')";

          if($conn->query($sql) === TRUE){
              echo "<script>alert('Cource uploaded successfully')</script>";
          }
      }
  }


  
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
    <link rel="stylesheet" href="css/style.css">
    <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
     <link href="acadmia/css/styleup.css" rel="stylesheet">
     
    <!-- style CSS -->
   
</head>

<body>
<header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light"><a class="navbar-brand" href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z"/>
                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
                      </svg><h2>UniversaLearn</h2><p class="lead">Excellence of Education
                       
                      </p> <img src="" ></a>
                         
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="Admin.php">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Addcourse.php">AddCources</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="uploads.php">AddE-Contents</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="feedback.php">Feddbacks</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adviewco.php">ViewCourses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adviewcnt.php">ViewE-contents</a>
                                </li>

                               
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Logout</a>
                                </li>
                                

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
   

    
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Upload Courses</h2>
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
              <span class="padding-bottom--15">Uploads Academic Content</span>
     <form class="form1" action="Addcourse.php" method="POST" enctype="multipart/form-data" >
        <div class="field padding-bottom--24">
        <div  class="field padding-bottom--24">
                    <label for="">Name of Course</label>
                    <input type="text"id="cname" name="cname"> 
                  </div>
            
                <div  class="field padding-bottom--24">
                  <label for="">Description of course</label>
                  <input type="text" id="descr"name="descr"> 
                </div>
                  
                    <label for="">Core of Course</label>
                    <select class="" id="core"name="core">
                        <option>Choose Course</option>
                      <option>Programming</option>
                      <option>Technical</option>
                      <option>Mathematics</option>
                      <option>Social Studies</option>
                      <option>English</option>
                      <option>Other</option>
                    </select>
                   
                  </div>
                  <div  class="field padding-bottom--24">
                  <label for="">Link of course</label>
                  <input type="text" id="vlink"name="vlink"> 
                </div>
                  <div  class="field padding-bottom--24">
                  <label for="">Photo of course</label>
                  <input type="file" id="imag"name="imag"> 
                </div>
        
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Upload">
                </div>
                <main id="main">

<!-- ======= About Us Section ======= -->

</section><!-- End About Us Section -->
        </form>
    </section>

    <script>
        var cname = document.getElementById("cname");
        var descr = document.getElementById("descr");
        var core = document.getElementById("core");
        var vlink = document.getElementById("vlink");
        var imag = document.getElementById("imag");
      
   

        function upload(){
            uploadImage.click();
        }

        uploadImage.addEventListener("change",function(){
            var file = this.files[0];
            if(cname.value == ""){
                cname.value = file.name;
            }
            choose.innerHTML = "You can change("+file.name+") picture";
        })
    
    </script>
     <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!--<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <!--<script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <
                

</body>
</html>






