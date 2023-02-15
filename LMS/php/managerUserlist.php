<?php
include("connection.php");




?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ManagerLandingPage</title>
    
    <link rel="stylesheet" href="../css/navbar-secondary-pages.css">
 
    <link rel="stylesheet" href="../css/footer-secondary.css">  
    <!-- <link rel="stylesheet" href="../css\userLogin.css"> -->
    <link rel="stylesheet" href="../css/managerRequestPage.css">

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="../javaScript\userPage.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <div class="managerRequestnavbar">
        <?php
        require_once('managerNavbar.php');
        ?>
    </div>
    <div class="managerRequestmainbox">


<div class="managerRequest-records">
    <div class="managerRequest-records-content">


</div>


           <!--  -->
<?php
include("connection.php");
error_reporting(0);
// echo "connectd";
$query = "SELECT * FROM USERDATA";
$data = mysqli_query($conn, $query);
$size = mysqli_num_rows($data);


if($size != 0){
    while($result = mysqli_fetch_assoc($data)){


        $username = $result['name'];
        $useraddress=$result['adress'];
        $useremail=$result['email'];
      
        echo " 
        
      
        <div class='managerRequest-records-content'>
  
        <div class='managerRequest-container'>
           
            <div class='managerRequest-details'>
                <h1 class='managerRequestname'>Name:".$username."</h1>
                <h1 class='managerRequestauthor'>Email:".$useremail."</h1> 
                <p class='managerRequestAbout'>Address:".$useraddress."</p>
        
            </div>
            <div class='managerRequest-panal'>
           
            <a><button class='managerRequestButton' id = 'deleteUserbutton' data-useremail='{$useremail}'>Remove</button></a>
        </div>
        </div>
    
    </div>
        
    
        
   
        
        
";
        echo "<br>";
       
    }
}
else{
    echo "empty Table!!";
}


?>

<!--  -->
    </div>
    </div>
    <div class="managerRequestfooter">
    <?php
        require_once('secondaryFooter.php');
        ?>
   
    </div>

    <script>


//    delete user
      
$(document).on("click","#deleteUserbutton",function(){
    var email = $(this).data("useremail");
 
    $.ajax({
               url:"managerdeleteUser.php",
               type:"POST",
               data:{bookrequestid:email},
               success:function(data){ 

               
                    if(data = "yes"){
                        alert("User Account Deleted!!");
                        window.location = "managerUserList.php";
                    }
                    else{
                        alert("Request Failed!!");
                    }
                  
            }   

            });
   });
    </script>
</body>

