<?php
include("connection.php");
$requestid = $_POST["bookrequestid"];   

session_start();
$memail = $_SESSION['manageremail'];

$requestIdQuery = "DELETE FROM BOOKREQUEST WHERE REQUESTID = '$requestid'";
$requestIdData = mysqli_query($conn, $requestIdQuery);
// $requestDetails = mysqli_fetch_assoc($requestIdData);


if($requestIdQuery){
    echo 'yes';
}
else{
    echo 'no';
}





?>