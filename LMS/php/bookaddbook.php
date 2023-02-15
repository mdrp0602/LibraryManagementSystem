<?php

include("connection.php");

$bookname = $_POST["bookname"];
$autorname = $_POST["autorname"];
$quantity = $_POST["quantity"];
$bookabout = $_POST["bookabout"];





$query = "INSERT INTO BOOK VALUES (NULL ,'$bookname','$autorname','$quantity','$bookabout')";

$data = mysqli_query($conn, $query);

if($data){
    echo 'yes';
}
else{
    echo 'no';
}
?>