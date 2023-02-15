<?php

include("connection.php");
error_reporting(0);

// echo ("manager book remove");

$bookid = $_POST['bookid'];
$deletquery = "DELETE FROM BOOK WHERE BOOKID = '$bookid'";
$query = mysqli_query($conn, $deletquery);

if($query){
    echo 'yes';
  
}

else{
    echo 'no';
}

?>