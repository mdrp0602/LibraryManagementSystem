<?php
include("connection.php");

session_start();
$uemail = $_SESSION['useremail'];
$selectQuery = "SELECT * FROM USERDATA WHERE EMAIL = '$uemail'";
$result = mysqli_query($conn, $selectQuery);

$userData = mysqli_fetch_assoc($result);
$uname = $userData['name'];
$uaddress = $userData['adress'];

$bookData = "SELECT * FROM BOOK";
$data = mysqli_query($conn, $bookData);
$noOfAvlBooks = mysqli_num_rows($data);

$borrowedquery = "SELECT * FROM BORROWEDBOOKS WHERE USEREMAIL = '$uemail'";
$borroweddata = mysqli_query($conn, $borrowedquery);
$nuOfBooksToReturn = mysqli_num_rows($borroweddata);

 




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserLoginPage</title>
    <link rel="stylesheet" href="../css/navbar-secondary-pages.css">

    <link rel="stylesheet" href="../css/userLogin.css">

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
    

    <div class="main-container">
       <div class="main-boxes main-box-1">
              <div class="main-box-1-op">
                <div class="main-content-1 main-content-box-1" id="userBorrowBox">
                    <i class="fa-solid fa-bars"></i>
                    <h1 class="main-content-heading">Borrow Book</h1>
                    <h6 class="number-of-books" id="number-of-books">No of Avilable Books: <span><?php echo $noOfAvlBooks  ?></span></h6>
                </div>
                <div class="main-content-1 main-content-box-2" id="userReturnBox">
                    <i class="fa-solid fa-bars"></i>
                    <h1 class="main-content-heading">Return book</h1>
                    <h6 class="books-borrowed" id="no-of-books-borrowed">
                       No. of borrowed books: <span><?php echo $nuOfBooksToReturn  ?></span>
                    </h6>
                </div>
              </div>
              <div class="main-box-1-guidlines">
                   <ul class="guidlines">
                    <li class="guidline1 guidline"> books need to be returned within 15 days
                    </li>
                    <li class="guidline2 guidline"> books need to be returned within 15 days</li>
                    <li class="guidline3 guidline"> books need to be returned within 15 days</li>
                    <li class="guidline4 guidline"> books need to be returned within 15 days</li>
                    <li class="guidline5 guidline"> books need to be returned within 15 days</li>
                   </ul>
              </div>
       </div>
       <div class="main-boxes main-box-2">
                <div class="profile-container">
                    <div class="profile-image">
                        <img src="../css/library-sign-up.jpg" alt="prifile-image" class="prfile">
                    </div>
                    <div class="profile-data ">
                      <h2 class="profile-name profile-content">Name: <span class="profile-name-span"><?php  echo $uname ?></span></h2>
                      <h2 class="profile-email profile-content">Email:<span class="profile-email-span"><?php  echo $uemail ?></span></h2>
                      <h2 class="profile-address profile-content">Address: <span class="profile-address-span"><?php  echo $uaddress ?></span></h2>
                    </div>
                </div>
       </div>
    </div>

    <div class="main-footer">
        <div class="main-footer-container">
           
            <!-- <i class="fa-regular fa-arrow-up"></i> -->
            <div class="main-footer-topbox footer-box">
              
                    <h2 class="footer-heading">Library today</h2>
                    <h6 class="footer-address">Yelahanka,Bangalore</h6>
                    <div class="footer-social-icons">
                       <a href="#twitter" target="_blank"> <i class="fa-brands fa-twitter"></i></a>
                       <a href="#twitter" target="_blank"> <i class="fa-brands fa-instagram"></i></a>
                       <a href="#twitter" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                       <a href="#twitter" target="_blank"> <i class="fa-brands fa-facebook"></i></a>
                        
                        
                        
                    </div>
            </div>
            <div class="main-footer-middle-box footer-box">
                <a href="#home">Home</a>
                <a href="#home">Login</a>
                <a href="#home">SignUp</a>
                <a href="#home">Manager</a>
                <a href="#home">Admin</a>

            </div>
            <div class="main-footer-bottom-box footer-box">
                    <h6 class="main-footer-copyright">
                        librarytoday copy Right all rights are reserverd 2018©
                    </h6>
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
         $("#userBorrowBox").click(function(e){
            window.location = "borrowbook.php";
            
         });
         $("#userReturnBox").click(function(e){
            window.location = "userborrowedbooks.php";
            
         });
  
  


</script>
</html>