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
$query = "SELECT * FROM Bookrequest";
$data = mysqli_query($conn, $query);
$size = mysqli_num_rows($data);


if($size != 0){
    while($result = mysqli_fetch_assoc($data)){


        $bookname = $result['bookname'];
        $Bookauthor=$result['bookauthor'];
        $username=$result['username'];
        $useremail=$result['useremail'];
        $requestid=$result['requestid'];
        echo " 
        
      
        <div class='managerRequest-records-content'>
  
        <div class='managerRequest-container'>
           
            <div class='managerRequest-details'>
                <h1 class='managerRequestname'>book name:".$bookname."</h1>
                <h1 class='managerRequestauthor'>By:".$Bookauthor."</h1> 
                <p class='managerRequestAbout'>Requested By:".$username."</p>
                <p class='managerRequestAbout'>".$useremail."</p>
                
            </div>
            <div class='managerRequest-panal'>
            <a><button class='managerRequestButton' id = 'acceptbutton' data-requestid='{$requestid}'>Accept</button></a>
            <a><button class='managerRequestButton' id = 'rejectedbutton' data-requestid='{$requestid}'>Reject</button></a>
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

        // ?request Granted
         
   $(document).on("click","#acceptbutton",function(){
    var requestid = $(this).data("requestid");
    // alert("requestButton"+ requestid);
 
    $.ajax({
               url:"bookrequestaccept.php",
               type:"POST",
               data:{bookrequestid:requestid},
               success:function(data){ 
                    if(data = "yes"){
                        alert("Permission Granted!!");
                        window.location = "managerRequestpage.php";
                    }
                    else{
                        alert("Request Failed!!");
                    }
                  
            }   

            });
   });  

//    Request denaied


      
$(document).on("click","#rejectedbutton",function(){
    var requestid = $(this).data("requestid");
    // alert("requestButton"+ requestid);
 
    $.ajax({
               url:"managerbookreject.php",
               type:"POST",
               data:{bookrequestid:requestid},
               success:function(data){ 

               
                    if(data = "yes"){
                        alert("Permission Reject!");
                        window.location = "managerRequestpage.php";
                    }
                    else{
                        alert("Request Failed!!");
                    }
                  
            }   

            });
   });
    </script>
</body>

