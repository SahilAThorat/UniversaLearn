<?php

include 'acadmia/connection.php';
if(isset($_POST['delete_btn']))
{
    $Id = $_POST['delete_id'];

    $query = "DELETE FROM cources WHERE Id='$Id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        //$_SESSION['status'] = "Your Data is Deleted";
       // $_SESSION['status_code'] = "success";
       echo "<script>alert('Data deleted Sucessfully');</script>";
        header('Location: adviewco.php'); 
     
      
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: adviewco.php'); 
    } 
 
}
?>