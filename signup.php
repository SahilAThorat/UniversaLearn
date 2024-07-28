<?php
include 'acadmia/connection.php';
error_reporting(0);
if(isset($_POST['submit'])){

$name=$_POST['name'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];



//connecting to dabase databasename.tablename
$sql="INSERT INTO `universalearn`.`sign` (`name`, `mail`, `pass`) 
VALUES ('$name', '$mail', '$pass');";

//echo  $sql;
//backside require to store data in database

if($conn->query($sql)==true){
    echo "<script>alert('Account Created Sucessfully');</script>";

}
else{
    echo "ERROR: $sql <br> $conn->error";
}

//$conn->close();

}
?>



<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Signup Form</title>
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
        <form action="signup.php"method="POST">
          <input type="text"id="name"name="name" placeholder="Full name" required name="" />
          <input type="text"id="name"name="mail" placeholder="Email address" required />
          <input type="password" id="name"name="pass"placeholder="Password" required />

          
         <input type="submit" name="submit"value="Signup" >
          <a href="Login.php"class="submit1" align="centre">Login?</a> 
        </form>
      </div>

     

    </section>
  </body>
</html>



