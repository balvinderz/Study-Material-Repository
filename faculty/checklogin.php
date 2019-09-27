<?php
include '../connect.php';
if(isset($_POST))
{
    $srdn = $_POST['srdn'];
    $password = $_POST['password'];
    $query = "select * from faculty where srdno='$srdn' and password ='$password';";
    $res= mysqli_query($connect,$query);
    if(mysqli_num_rows($res) ==1)
    {
        echo "valid user";
        session_start();
        $_SESSION['srdn']= $srdn;
        header("refresh:0 ;url=./facultypage.php"); 

    }
    else 
    {
        echo "invalid user";
        echo "<script>alert('invalid srdn no or password');</script>";
       // header("refresh:0 ;url=./index.php");
    }
} 
?>