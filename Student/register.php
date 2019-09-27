<?php
include "../connect.php";
$roll = $_POST['roll'];
$sem= $_POST['sem'];
$name = $_POST['name'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$password= $_POST['password'];
echo $sem;
$checkquery = "select * from student where rollno='$roll'";
echo $checkquery;
$res = mysqli_query($connect,$checkquery);
if(mysqli_num_rows($res)>0)
{
    ?>
    <script>
        alert("User already registered");
        
        </script>
        <?php 
        header("refresh:0 ;url=./index.php"); 

        
}
else {


$query = "insert into `student` values('$roll','$name','$branch','$sem','$email','$password')";
echo $query;
$res = mysqli_query($connect,$query);
mysqli_query($connect,$res);
echo "<script>alert('User successfully registered');</script>";
header("refresh:0 ;url=./index.php"); 
}
?>