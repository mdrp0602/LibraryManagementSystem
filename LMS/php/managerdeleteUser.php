<?php

include("connection.php");
error_reporting(0);


$emailTodelete = $_POST['bookrequestid'];

$deletquery = "DELETE FROM USERDATA WHERE EMAIL = '$emailTodelete'";
$query = mysqli_query($conn, $deletquery);

if($query){
    echo 'yes';
  
}

else{
    echo 'no';
}

?>