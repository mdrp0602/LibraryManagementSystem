<?php

include("connection.php");
// echo "managerLoginpage";


session_start();

$email = $_POST["logemail"];
$password = $_POST["logpassword"];


$query = "SELECT * FROM MANAGERDATA WHERE EMAIL = '$email' and password = '$password' ";

$data = mysqli_query($conn, $query);



if(mysqli_num_rows($data) > 0){
    $_SESSION['manageremail'] = $email;
    echo 'yes';
    

}
else{
    echo 'no';
}

?>