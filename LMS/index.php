
<?php

include("php\connection.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css\admin-login-form.css">
    <link rel="stylesheet" href="css\managerLogin-form.css">
    <link rel="stylesheet" href="css\userLoginForm.css">
    <link rel="stylesheet" href="css\index.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script  type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javaScript\index.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-container">


            <div class="navbar-logo">
                <a href="#logo">library<span> today</span></a>
            </div>
            <div class="navbar-mobile-icon"><i class="fa-solid fa-bars"></i></div>
            <div class="navbar-navlinks">
                <ul class="navbar-main">
                    <li><a href="#main-section-id" class="active">Home</a></li>
                    <li><a href="#home" id="nav-login-trigger">Login</a></li>
                    <li><a href="#manager-form-link">Contact Us</a></li>
                    <li><a href="#signup-form-id">SignUp</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-section" id="main-section-id">
        <h1 class="main-section-heading">
            A reader lives a thousand lives before he dies
        </h1>
    </div>
    <div class="main-services">
        <h2 class="main-box-heading">
            The only thing that you absolutely have to know, is the location of the library.
        </h2>
            <div class="main-box-container">
                <div class="main-box main-box1">
                    <img src="images\books.png" alt="" class="main-box-icon">
                    <h1 class="box-heading">
                        <span class="box-span">1000+</span> Books
                    </h1>
                    <p class="box-para">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores est nihil velit.
                    </p>
                </div>
                <div class="main-box main-box2">
                    <img src="images\articles.png" alt="" class="main-box-icon">
                    <h1 class="box-heading">
                        <span class="box-span">1000+</span> Books
                    </h1>
                    <p class="box-para">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores est nihil velit.
                    </p>
                </div>
                <div class="main-box main-box3">
                    <img src="images/eresources.png" alt="" class="main-box-icon">
                    <h1 class="box-heading">
                        <span class="box-span">1000+</span> Books
                    </h1>
                    <p class="box-para">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores est nihil velit.
                    </p>
                </div>
            </div>
    </div>

    <div class="main-signup-form" id="signup-form-id">
        <div class="main-signup-container">
            <div class="main-signup-image main-signup-box"></div>
            <div class="main-sign-form main-signup-box">
                
             <div class="form-container" id="form-page-id">

                <form method="post" class="sign-form" enctype="multipart/form-data">
             <div class="form-head">

    
                <h2 class="form-heading">Hello!!</h2>
                <h6 class="form-head-para">Please Sign in to continue</h6>
            </div>

                    <input type="text" name="fullname" placeholder="Full Name " id="fname" class="form-control"> <br>
                    <input type="email" name="email" placeholder="Email" id="femail" class="form-control"> <br>
                    
                    <input type="password" name="Password" placeholder="Password" id="fpassword" class="form-control">
                    <!-- <label for="fileUpload" class="form-profile-label">Select profile image</label>
                    
                    <input type="file" id="img" class="form-file-input" name="img"  accept="image/*" placeholder="">
                     -->
                    <textarea name="address" class="form-control" placeholder="Address" id="faddress" cols="30" rows="4"></textarea>
    
                   
                    <input type="submit" value="Sign Up" id="formSubmit" name="submit" class="form-button">
                    </form>   
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
                       <a href="#instagram-link" target="_blank"> <i class="fa-brands fa-instagram"></i></a>
                       <a href="#linkdin" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                       <a href="#facebook" target="_blank"> <i class="fa-brands fa-facebook"></i></a>
                        
                        
                        
                    </div>
            </div>
            <div class="main-footer-middle-box footer-box">
                <a href="#main-section-id">Home</a>
                <a href="#form-page-id">SignUp</a>
                <a href="#Home" id="manager-form-link">Manager</a>
                <a href="#home" id="admin-form-link">Admin</a>

            </div>
            <div class="main-footer-bottom-box footer-box">
                    <h6 class="main-footer-copyright">
                        librarytoday copy Right all rights are reserverd 2018©
                    </h6>
            </div>
        </div>
    </div>

    <!-- forms -->


     <div class="forms-popup-container"> 
   
        <div class="userLoginForm-container">
            <div class="form-content">
                <form action="" method="post" class="user-login-form">
                    <label for="form" class="form-label">User Login</label> <br>
                    <div class="form-cross">X</div>
                    <input type="email" name="Email" placeholder="Email" class="user-form-control" id="user-login-form-email">
                    <input type="password" name="Password" class="user-form-control" placeholder="Password" id="user-form-passoword" class="user-login-form-password">
                    <!-- <span class="form-error-message">
                        Invalid Password
                    </span>  -->
                    <input type="button" value="Login" class="user-form-button" id="userLoginButton" class="user-form-button">
                   
                </form>
            </div>
        </div>

        
        <div class="managerLoginForm-container">
            <div class="manager-form-content">
                <form action="" method="post" class="manager-login-form">
                    <label for="form" class="manager-form-label">manager </label> <br>
                    <div class="manager-form-cross">X</div>
                    <input type="email" name="Email" placeholder="Email" class="manager-form-control" id="manager-login-form-email">
                    <input type="password" name="Password" class="manager-form-control" placeholder="Password" id="manager-form-passowrd" class="manager-login-form-password">
                    <!-- <span class="manager-form-error-message"> 
                        Invalid Password
                    </span> -->
                    <input type="button" value="Login" class="manager-form-button" id="managerLoginButton"  class="manager-form-button">
                   
                </form>
            </div>
        </div>

     

        <div class="adminLoginForm-container">
            <div class="admin-form-content">
                <form action="" method="post" class="admin-login-form">
                    <label for="form" class="admin-form-label">admin Login</label> <br>
                    <div class="admin-form-cross">X</div>
                    <input type="email" name="Email" placeholder="Email" class="admin-form-control" id="admin-login-form-email">
                    <input type="password" name="Password" class="admin-form-control" placeholder="Password" id="admin-form-passowrd" class="admin-login-form-password">
                    <!-- <span class="admin-form-error-message"> 
                        Invalid Password    
                    </span>-->
                    <input type="button" value="Login" class="admin-form-button" >
                   
                </form>
            </div>
        </div>

       
    </div>   

</body>



<script>
    
    $("#formSubmit").click(function(e){
            e.preventDefault();

            var formName = $("#fname").val();
            var formEmail = $("#femail").val();
            var formPassword = $("#fpassword").val();
            var formAddress = $("#faddress").val();

           

            $.ajax({
               url:"php/userSignUp.php",
               type:"POST",
               data:{fname:formName,femail:formEmail,fpassword:formPassword,faddress:formAddress},
               success:function(data){  

                if(data == 'no'){
                    alert(data);
                } 
                else{

                    alert(data);
                }
               }               
            });

            location.reload(true);
            
         });
        //  logins
        // 

        // User Login Form

         $("#userLoginButton").click(function(e){
            e.preventDefault();

            var useremail = $("#user-login-form-email").val();
            var userpassword = $("#user-form-passoword").val();
          
           

            $.ajax({
               url:"php/userlogin.php",
               type:"POST",
               data:{logemail:useremail,logpassword:userpassword},
               success:function(data){ 
                if(data == "yes"){
    
                window.location = "php/userLandingPage.php";
               }    
               else{
                alert("Invalid User Details!!");
               }  
            }  

            });
            
         });


        //  ManagerLogin form

         $("#managerLoginButton").click(function(e){
            e.preventDefault();

            var manageremail = $("#manager-login-form-email").val();
            var managerpassword = $("#manager-form-passowrd").val();

            $.ajax({
               url:"php/managerlogin.php",
               type:"POST",
               data:{logemail:manageremail,logpassword:managerpassword},
               success:function(data){ 
                 if(data == "yes"){
    
                 window.location = "php/managerLandingPage.php";
               }    
               else{
                alert("Invalid User Details!!");
               } 
             
            }
                
                    

            });
            
         });





</script>
</html>

<?php
/*
if ($_GET['submit']) {
    $ffullname = $_GET['fullname'];
    $femail = $_GET['email'];
    $fpassword = $_GET['Password'];
    $faddress = $_GET['address'];

    echo "$ffullname";
    echo "$femail";
    echo " $fpassword";
    echo " $faddress ";



    $query = "INSERT INTO USERDATA VALUES ('$ffullname','$femail','$fpassword','$faddress')";
    $data = mysqli_query($conn, $query);
    if ($data) {

        echo "<script> alert('sucessfull') </script>";
    } else {
        // echo "failed!!";
        echo "<script> aleart('failed') </script>";
    }

}   */

?>