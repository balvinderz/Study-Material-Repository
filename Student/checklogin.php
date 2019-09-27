<?php 
include '../connect.php';
session_start();
if(isset($_POST['roll']) && isset($_POST['password']))
{
    $roll= $_POST['roll'];
    $password=  $_POST['password'];
    $query = "select * from student where rollno='$roll' and password='$password'";
    echo $query;
    $res=  mysqli_query($connect,$query);
    if(mysqli_num_rows($res) ==1)
    {
        echo "right login";
        $_SESSION['roll']=$roll;
        header("refresh:0 ;url=./studentpage.php"); 

    }
    else 
    {
        echo "<script>alert('wrong username or password');</script>";
        //header("refresh:0 ;url=./index.php"); 

    }
}

?>