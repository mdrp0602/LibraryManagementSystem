<?php
include("connection.php");
$bookname = $_POST["requestbookname"];   

session_start();

$uemail = $_SESSION['useremail'];


$userquery = "SELECT * FROM USERDATA WHERE EMAIL = '$uemail'";
$userdata = mysqli_query($conn, $userquery);
$userdetails = mysqli_fetch_assoc($userdata);

$uname = $userdetails['name'];

$bookquery = "SELECT * FROM BOOK WHERE BOOKNAME = '$bookname'";
$bookdata = mysqli_query($conn, $bookquery);

$bookdetails = mysqli_fetch_assoc($bookdata);

$bookauthor = $bookdetails['author'];

$requestbookcheckquery = "SELECT * FROM BOOKREQUEST";
$requestbookcheckdata = mysqli_query($conn, $requestbookcheckquery);
$requestbookchecksize = mysqli_num_rows($requestbookcheckdata);

$requestquery = "INSERT INTO BOOKREQUEST VALUES (NULL,'$bookname','$uemail','$uname','$bookauthor')";
$data = mysqli_query($conn, $requestquery);


if($bookdata){
    echo 'yes';
}
else{
    echo 'yes';
}





?>