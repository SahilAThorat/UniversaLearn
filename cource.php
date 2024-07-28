



<!DOCTYPE html>
<html lang="en">
<main id="main">
<head>
      <link rel="stylesheet" href="acadmia/css/styleup.css">
  
     <!-- <link rel="stylesheet" href="table.css">-->
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
                            <h2>Courses</h2>
                            <p>Home/Courses<span>/</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


<div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
         
         
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="http://blog.stackfindover.com/" rel="dofollow">UniversaLearn</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">View Your Contents</span>
              
  <div class="main">
<p class="sign" align="center"> </p>
  <form class="form1"action="" method="post">
  <div class="field padding-bottom--24">
                    <label for="">Standard</label>
                    <select class="" id="name"name="Class">
                        <option>Choose Class</option>
                      <option>class_1st</option>
                      <option>class_2nd</option>
                      <option>class_3rd</option>
                      <option>class_4th</option>
                      <option>class_5th</option>
                      <option>class_6th</option>
                      <option>class_7th</option>
                      <option>class_8th</option>
                      <option>class_9th</option>
                      <option>class_10th</option>
                      <option>Other</option>
                    </select>
                    <label for="">Board</label>
                    <select class="" id="name"name="Board">
                        <option>Choose Board</option>
                      <option>Maharashtra</option>
                      <option>CBSE</option>
                     
                    </select>
                  </div>
                  
                  <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Submit">
                </div>
    </div>
</form>
</div>
    </div>
</div>
</body>
<body>
<h3>E-Content</h3>
<div class="table-wrapper">
    <table class="fl-table">
      <head>
      <link rel="stylesheet" href="acadmia/css/table.css">
</head>
        <thead>
        
        <tr>
            <th>Subject</th>
            <th>Board</th>
            <th>Class</th>
            <th>Content_Type</th>
            <th>Link</th>
           

          </tr>
        </thead>
       
        <tbody>
</body>
   </html>

<?php
include 'acadmia/connection.php';
if(isset($_POST['submit'])){
$Class=$_POST['Class'];
$Board=$_POST['Board'];
$query="SELECT * FROM `uploads` where Class='$Class'AND Board='$Board'";
$query_run= mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_run))
{
  ?>
  <tr>
  <td><?php echo $row['Subject'] ?></td>
  <td><?php echo $row['Board'] ?></td>
   <td><?php echo $row['Class'] ?></td>
   <td><?php echo $row['Content_type'] ?></td>
   <?php 
    $url=$row ['Link'];
   $urls=str_replace("localhost/UniversaLearn/acadmia/",".",$url);
   
 ?>

 <td><a href="https://<?php echo $urls ; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
</svg></a></td>
   
</tr>
<?php
}

}

?>
 </table>
 </div>

 </main>
 <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js 
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