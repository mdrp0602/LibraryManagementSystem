<?php
include("connection.php");
// echo "managerLandingPage";
session_start();
$memail = $_SESSION['manageremail'];
$selectQuery = "SELECT * FROM MANAGERDATA WHERE EMAIL = '$memail'";
$result = mysqli_query($conn, $selectQuery);

$mserData = mysqli_fetch_assoc($result);

$mname = $mserData['name'];
$maddress = $mserData['address'];



// 

$userquery = "SELECT * FROM USERDATA";
$userdata = mysqli_query($conn, $userquery);
$numOfUsers = mysqli_num_rows($userdata);

$requestquery = "SELECT * FROM BOOKREQUEST";
$requestdata = mysqli_query($conn, $requestquery);
$numOfrequests = mysqli_num_rows($requestdata);

$bookquery = "SELECT * FROM BOOK";
$bookdata = mysqli_query($conn, $bookquery);
$numOfbook = mysqli_num_rows($bookdata);

$borrowedbookquery = "SELECT * FROM BORROWEDBOOKs";
$borrowedbookdata = mysqli_query($conn, $borrowedbookquery);
$borrowednumOfbook = mysqli_num_rows($borrowedbookdata);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manager Login</title>
    <link rel="stylesheet" href="../css/navbar-secondary-pages.css">
    <link rel="stylesheet" href="../css/footer-secondary.css">
    <link rel="stylesheet" href="../css/managerLogin.css">

 

    
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <script src="..\javaScript\userPage.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>

    <div class="navbar">
      <div class="navbar-container">
        <div class="navbar-logo">
            <a href="#logo" class="nav-logo">Library<span>Today</span></a>
            <a href="#Name" class="nav-name">Welome:<span class="nav-profile" id="nav-profile-name"><?php echo $mname; ?></span></a>
        </div>
        <div class="navbar-mobile-menu"><i class="fa-solid fa-bars"></i></div>
        <div class="nabar-links">
            <ul class="navbar-main">
                
                <li><a id="managerLogOutid">Log Out</a></li>
           
                
            </ul>
        </div>
      
      </div>
    </div>
    

    <div class="main-container">
       <!-- <div class="main-boxes main-box-1"> -->
              <div class="main-box-1">
                <div class="main-content-1 main-content-box-1" id="requestBox">
                    <i class="fa-solid fa-bars"></i>
                    <h1 class="main-content-heading">Requests</h1>
                    <h6 class="number-of-books" id="number-of-books">Numbers of Requests: <span><?php echo $numOfrequests; ?></span></h6>
                </div>

                <div class="main-content-1 main-content-box-2" id="manageBookBox">
                    <i class="fa-solid fa-bars"></i>
                    <h1 class="main-content-heading">No. of Book</h1>
                    <h6 class="number-of-books" id="number-of-books">No of Avilable Books: <span><?php echo $numOfbook; ?></span></h6>
                </div>

                <div class="main-content-1 main-content-box-3" id="manageUsersBox">
                    <i class="fa-solid fa-bars"></i>
                    <h1 class="main-content-heading">Users</h1>
                    <h6 class="number-of-books" id="number-of-books">Number of Users:<span><?php echo $numOfUsers; ?></span></h6>
                </div>

                <div class="main-content-1 main-content-box-4" id="manageBorowedBox">
                    <i class="fa-solid fa-bars"></i>
                    <h1 class="main-content-heading">Borrowed Books</h1>
                    <h6 class="number-of-books" id="number-of-books">No of Borrowed Books: <span><?php echo $borrowednumOfbook; ?></span></h6>
                </div>

                
              
       </div>
       <div class="main-boxes main-box-2">
                <div class="profile-container">
                    <div class="profile-image">
                        <img src="../css/library-sign-up.jpg" alt="prifile-image" class="prfile">
                    </div>
                    <div class="profile-data ">
                      <h2 class="profile-name profile-content">Name: <span class="profile-name-span"><?php echo $mname; ?></span></h2>
                      <h2 class="profile-email profile-content">Email:<span class="profile-email-span"><?php echo $memail; ?></span></h2>
                      <h2 class="profile-address profile-content">Address: <span class="profile-address-span"><?php echo $maddress; ?></span></h2>
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
    $("#managerLogOutid").click(function(e){

        

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


    // functions of managers

    $("#requestBox").click(function(e){
      
        window.location = "managerRequestpage.php";

    });
    
    $("#manageUsersBox").click(function(e){
      
      window.location = "managerUserlist.php";

  });

  $("#manageBookBox").click(function(e){
      
      window.location = "managerEditBook.php";

  });
  $("#manageBorowedBox").click(function(e){
      
      window.location = "managerBorrowedBooks.php";

  });
 
 

</script>
</html>