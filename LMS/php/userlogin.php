<?php

include("connection.php");


session_start();

$email = $_POST["logemail"];
$password = $_POST["logpassword"];
$_SESSION['useremail'] = $email;

$query = "SELECT * FROM USERDATA WHERE EMAIL = '$email' and password = '$password' ";

$data = mysqli_query($conn, $query);


if(mysqli_num_rows($data) > 0){
    echo 'yes';
    

}
else{
    echo 'no';
}

?>