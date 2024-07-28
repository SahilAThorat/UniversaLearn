<?php
session_start();

include 'acadmia/connection.php';
error_reporting(0);
if(isset($_POST["btn_login"])){
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];
    if(isset($_POST["btn_login"])){
$query="SELECT * FROM adlogin WHERE  mail='$mail'AND pass='$pass'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total>0){

  $_SESSION["loginID"] = true;
    header("Location: Admin.php");
    
    
}
else{
  echo "<script>alert('Invalid Credentials for Admin Login');</script>";
}
   
}
}
?> 
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Login Form</title>
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <header>Login</header>
        <form action="Adlogin.php"method="POST">
         
          <input type="text"name="mail" placeholder="Email address" required />
          <input type="password" name="pass"placeholder="Password" required />

          <input type="submit" name="btn_login"value="Login" />
          <a href="signup.php"class="submit1" align="center">User Login?</a>

        </form>
      </div>

     

      
    </section>
  </body>
</html>

