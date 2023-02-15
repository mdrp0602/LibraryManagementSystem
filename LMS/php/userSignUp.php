<?php

include("connection.php");

$name = $_POST["fname"];
$email = $_POST["femail"];
$password = $_POST["fpassword"];
$address = $_POST["faddress"];


$query = "INSERT INTO USERDATA VALUES ('$name','$email','$password','$address')";

$data = mysqli_query($conn, $query);

if($data){
    echo 'yes';
}
else{
    echo 'no';
}
?>