<?php
include("connection.php");

// session_start();
$uemail = $_SESSION['useremail'];
$selectQuery = "SELECT * FROM USERDATA WHERE EMAIL = '$uemail'";
$result = mysqli_query($conn, $selectQuery);

$userData = mysqli_fetch_assoc($result);
$uname = $userData['name'];
$uaddress = $userData['adress'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secondaryheders</title>
    <link rel="stylesheet" href="../css/navbar-secondary-pages.css">

    <link rel="stylesheet" href="../css\userLogin.css">

    <link rel="stylesheet" href="../css/footer-secondary.css">

    
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <script src="../javaScript\userPage.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>

    <div class="navbar">
      <div class="navbar-container">
        <div class="navbar-logo">
            <a href="#logo" class="nav-logo">Library<span>Today</span></a>
            <a href="#Name" class="nav-name">Welome:<span class="nav-profile" id="nav-profile-name"><?php  echo $uname ?></span></a>
        </div>
        <div class="navbar-mobile-menu"><i class="fa-solid fa-bars"></i></div>
        <div class="nabar-links">
            <ul class="navbar-main">
                
                <li><a href="#Logout" id="userLogOutId">Log Out</a></li>
                <li><a href="#Update">update</a></li>
                
            </ul>
        </div>
      
      </div>
    </div>
</body>
<script>


    $("#userLogOutId").click(function(e){

$.ajax({
   url:"userLogOut.php",
   type:"POST",
   success:function(data){ 
    if(data == 1){
    window.location = "../index.php#home";
   } 
   else{
    alert("Logout failed");
   }    
}   

});

});

</script>