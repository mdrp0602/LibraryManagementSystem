<?php

include("connection.php");
error_reporting(0);


$emailTodelete = $_GET['email'];

$deletquery = "DELETE FROM USERDATA WHERE EMAIL = '$emailTodelete'";
$query = mysqli_query($conn, $deletquery);

if($query){
    echo "<script> alert('record deleted') </script>";
  
}

else{
    echo "<script> alert('failed!') </script>";
}

?>