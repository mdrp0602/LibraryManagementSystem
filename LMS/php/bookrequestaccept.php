<?php
include("connection.php");
$requestid = $_POST["bookrequestid"];   

session_start();
$memail = $_SESSION['manageremail'];

$requestIdQuery = "SELECT * FROM BOOKREQUEST WHERE REQUESTID = '$requestid'";
$requestIdData = mysqli_query($conn, $requestIdQuery);
$requestDetails = mysqli_fetch_assoc($requestIdData);

$requestBookName = $requestDetails['bookname'];
$requestBookAuthor = $requestDetails['bookauthor'];
$requestBookUemail = $requestDetails['useremail'];
$requestBookUname = $requestDetails['username'];

$selectQuery = "SELECT * FROM MANAGERDATA WHERE EMAIL = '$memail'";
$result = mysqli_query($conn, $selectQuery);
$mserData = mysqli_fetch_assoc($result);
$mname = $mserData['name'];

// echo "$requestBookName";
// echo "$requestBookAuthor";
// echo "$requestBookUemail";
// echo "$requestBookUname";






$requestquery = "INSERT INTO BORROWEDBOOKS VALUES (NULL,'$requestid','$requestBookName','$requestBookAuthor','$requestBookUname','$requestBookUemail','$mname')";
$requestData = mysqli_query($conn, $requestquery);

$UpdateQuery = "UPDATE BOOK SET QUANTITY =  QUANTITY -1 WHERE BOOKNAME = '$requestBookName'";
$updateResult = mysqli_query($conn, $UpdateQuery);


$requestIdQuery = "DELETE FROM BOOKREQUEST WHERE REQUESTID = '$requestid'";
$requestIdData = mysqli_query($conn, $requestIdQuery);


if($requestData){
    echo 'yes';
}
else{
    echo 'no';
}





?>