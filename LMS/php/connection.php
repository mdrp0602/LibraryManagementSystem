<?php
$servername = "localhost:3307";
$username = "root";
$passsword = "";
$dbname = "lbs-1";

$conn = mysqli_connect($servername,$username,$passsword,$dbname);

if($conn){
    // echo "connection sucessfull";
}
else{
    // echo "Connection failed!";
}


?>