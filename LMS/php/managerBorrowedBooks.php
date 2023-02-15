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

    <title>ManagerBorrowed Books</title>
    
    <link rel="stylesheet" href="../css/navbar-secondary-pages.css">
 
    <link rel="stylesheet" href="../css/footer-secondary.css">  
    <!-- <link rel="stylesheet" href="../css\userLogin.css"> -->
    <link rel="stylesheet" href="../css/manageredit.css">

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="../javaScript\userPage.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <div class="managereditnavbar">
        <?php
        require_once('managerNavbar.php');
        ?>
    </div>
    <div class="managereditmainbox">


<div class="manageredit-records">
    <div class="manageredit-records-content">


</div>


           <!--  -->
<?php
include("connection.php");
error_reporting(0);
// echo "connectd";
$query = "SELECT * FROM BORROWEDBOOKS";
$data = mysqli_query($conn, $query);
$size = mysqli_num_rows($data);


if($size != 0){
    while($result = mysqli_fetch_assoc($data)){


        $borrowedbookname = $result['bookname'];
        $borrowUseremail=$result['useremail'];
        $borrowusername=$result['username'];
        $manager = $result['manager'];
        echo " 
        
      
        <div class='manageredit-records-content'>
  
        <div class='manageredit-container'>
           
            <div class='manageredit-details'>
                <h1 class='managereditname'>Book Name:".$borrowedbookname."</h1>
                <h1 class='managereditauthor'>To: ".$borrowusername."</h1> 
                <p class='managereditAbout'>email: ".$borrowUseremail."</p>
                <p class='managereditAbout'>Approved By: ".$manager."</p>
          
                
            </div>
            <div class='manageredit-panal'>
            <a><button class='managereditButton' id = 'mailButton' data-borrowUseremail='{$borrowUseremail}'>Message</button></a>

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
    <div class="managereditfooter">
    <?php
        require_once('secondaryFooter.php');
        ?>
   
    </div>

    <script>

        // ?request Granted
         
   $(document).on("click","#edittbutton",function(){
    var bookid = $(this).data("bookid");
    alert( bookid);
 
    $.ajax({
            //    url:"bookrequestaccept.php",
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

