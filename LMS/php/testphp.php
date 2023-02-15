<html>
    <head><title>Test html</title></head>
<body>
    
<table border="2">
    <tr>
        <td>name</td>
        <td>email</td>
        <td>password</td>
        <td>delete</td>
        <td>Update</td>
    </tr>
<?php
include("connection.php");
error_reporting(0);
echo "connectd";
$query = "SELECT * FROM USERDATA";
$data = mysqli_query($conn, $query);
$size = mysqli_num_rows($data);
echo $size;

if($size != 0){
    while($result = mysqli_fetch_assoc($data)){
        echo "
        <tr>
            <td>".$result['name']." </td>
            <td>".$result['email']." </td>
            <td>".$result['password']." </td>
            <td><a href = 'delete.php?email=$result[email]' onClick='return checkdelete()'>Delete </a> </td>


            <td><a href = 'update.php?name=$result[name]&email=$result[email]&password=$result[password]' >Update</a></td>
        
        ";
    }
}
else{
    echo "empty Table!!";
}


?>
</table>

<script>
    function checkdelete(){
        return Confirm('are you surn want to delete this record');
    }
</script>
</body>
</html>


