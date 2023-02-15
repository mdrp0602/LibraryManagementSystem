<?php
include("connection.php");
$borrowid = $_POST["requestborrowid"];   

// session_start();


$UpdateQuantityQuery = "SELECT * FROM BORROWEDBOOKS WHERE BORROWID  = '$borrowid'";
$UpdateQuantityData = mysqli_query($conn, $UpdateQuantityQuery);
$result = mysqli_fetch_assoc($UpdateQuantityData);
$name = $result['bookname'];




$requestIdQuery = "DELETE FROM BORROWEDBOOKS WHERE BORROWID  = '$borrowid'";
$requestIdData = mysqli_query($conn, $requestIdQuery);






$UpdateQuery = "UPDATE BOOK SET QUANTITY=QUANTITY+1 WHERE BOOKNAME = '$name'";
$updateResult = mysqli_query($conn, $UpdateQuery);

if($requestIdQuery){
    echo 'yes';
}
else{
    echo 'no';
}





?>