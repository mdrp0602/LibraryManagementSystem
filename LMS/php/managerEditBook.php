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

        <div class="manager-addbooks-container">
            <div class="manager-addbook-content">
                <form action="" method="post" class="manager-addbook" id="manager-addbook">
                    
                  
                        <input type="text" name="bookname" id="book-form-bookname" placeholder="Book Name" class="manager-formcontrol"> <br>
                    <input type="text" name="authorname" id="book-form-autorname" placeholder="Book Author  "  class="manager-formcontrol"> <br>
                    <input type="number" name="quantity" id="quantity" placeholder="Book quantity"  class="manager-formcontrol">  <br>
                   <textarea name="" id="bookabout" cols="8" placeholder="About Book" rows="5" class="textarea manager-formcontrol textarea"></textarea> 
                   <input type="button" id="addbook" value="Add Book" class="manager-addbook-button" > 
                  
           
                </form>

            </div>
            

            <!--  -->
    

            <!--  -->

        </div>
<div class="manageredit-records">
    <div class="manageredit-records-content">
     <input type="button" value="Add Book" class="manager-addbook-toggle-button" >
</div>


           <!--  -->
<?php
include("connection.php");
error_reporting(0);
// echo "connectd";
$query = "SELECT * FROM BOOK";
$data = mysqli_query($conn, $query);
$size = mysqli_num_rows($data);


if($size != 0){
    while($result = mysqli_fetch_assoc($data)){


        $bookname = $result['bookname'];
        $Bookauthor=$result['author'];
        $bookquantity=$result['quantity'];
        $bookid = $result['bookid'];
        echo " 
        
      
        <div class='manageredit-records-content'>
  
        <div class='manageredit-container'>
           
            <div class='manageredit-details'>
                <h1 class='managereditname'>Name:".$bookname."</h1>
                <h1 class='managereditauthor'>By:".$Bookauthor."</h1> 
                <p class='managereditAbout'>Quantity: ".$bookquantity."</p>
          
                
            </div>
            <div class='manageredit-panal'>
            <a><button class='managereditButton' id = 'edittbutton' data-bookid='{$bookid}'>Edit </button></a>
            <a><button class='managereditButton' id = 'removerbutton' data-bookid='{$bookid}'>Remove </button></a>

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

        // ?Add book
         
   $(document).on("click","#addbook",function(){
 
            var fbookname = $("#book-form-bookname").val();
            var fautorname = $("#book-form-autorname").val();
            var fquantity = $("#quantity").val();
            var fbookabout = $("#bookabout").val();    
 
    $.ajax({
               url:"bookaddbook.php",
               type:"POST",
               data:{bookname:fbookname, autorname:fautorname, quantity:fquantity,bookabout:fbookabout},
               success:function(data){ 

               


                    if(data = "yes"){
                        alert("Book Added!!");
                        window.location = "managerEditBook.php";
                    }
                    else{
                        alert("Request Failed!!");
                    }
                  
            }   

            });
   });

//    editbook


      
$(document).on("click","#edittbutton",function(){
    var bookid = $(this).data("bookid");
    alert("bookid"+ bookid);
 
    // $.ajax({
    //            url:"managerbookreject.php",
    //            type:"POST",
    //            data:{bookrequestid:requestid},
    //            success:function(data){ 

    //             alert(data);
               
    //                 // if(data = "yes"){
    //                 //     alert("Permission Reject!");
    //                 //     window.location = "managerRequestpage.php";
    //                 // }
    //                 // else{
    //                 //     alert("Request Failed!!");
    //                 // }
                  
    //         }   

    //         });
   });

//    remove book

   $(document).on("click","#removerbutton",function(){
    var fbookid = $(this).data("bookid");
  
 
    $.ajax({
               url:"managerbookremove.php",
               type:"POST",
               data:{bookid:fbookid},
               success:function(data){ 

               
                    if(data = "yes"){
                        alert("Bood Removed!");
                        window.location = "managerEditBook.php";
                    }
                    else{
                        alert("Request Failed!!");
                    }
                  
            }   

            });
   });

  


$(".manager-addbook-toggle-button").click(function(){
 
    $(".manager-addbooks-container").toggleClass("manager-book-trigger");
    $(".manager-addbook-toggle-button").toggleClass("manager-displaynone");
})

    </script>
</body>

