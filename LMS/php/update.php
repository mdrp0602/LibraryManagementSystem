<?php
include("connection.php");
echo "updte.php";




$oldname=$_GET['name'];
$oldemail=$_GET['email'];
$oldpassword = $_GET['password'];


echo "$oldname";
echo "$oldemail";
echo "$oldpassword";






?>

<html>
    <head><title>update details</title></head>
    <link rel="stylesheet" href="../css/index.css">
    <body>
        
    <div class="main-signup-form">
        <div class="main-signup-container">
      

                <form method="get" class="sign-form" enctype="multipart/form-data">
             <div class="form-head">

    
                <h2 class="form-heading">Hello!!</h2>
                <h6 class="form-head-para">Please Sign in to continue</h6>
            </div>

                    <input type="text" name="fullnameform" placeholder="Full Name " id="fname" class="form-control" value="<?php echo "$oldname"; ?>" > <br>
                    <input type="email" name="emailform" placeholder="Email" id="emailform" class="form-control" value="<?php echo "$oldemail"; ?>" readonly > <br>    
                    <input type="password" name="Passwordform" placeholder="Password" id="fpassword" class="form-control" value="<?php echo "$oldpassword"; ?>" >

                  <input type="submit" value="update" name="submit" class="form-button"> 
                    </form>   
             </div>
            </div>
        </div>
    </div>
    


</body>
</html>

<?php
echo "phase2";
if ($_GET['submit']) {
    $newemail = $_GET['emailform'];
    $newname = $_GET['fullnameform'];
    $newpassword = $_GET['Passwordform'];

    echo "$newemail";
    echo "$newname";
    echo "$newpassword";

}
    $updatequery = "UPDATE USERDATA 
            SET 
                name='$newname',
                email='$newemail',
                password ='$newpassword'
            WHERE email='$newemail'";


    $data = mysqli_query($conn, $updatequery);


    if($data){
    echo "sucess";
}
else{
    echo "failed";
}


    
?>