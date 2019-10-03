<?php 

include '../connect.php';
if(isset($_POST))
{
    $name= $_POST['name'];
    $password= $_POST['password'];
    $srdn = $_POST['srdn'];
    $subject= $_POST['subject'];
    $email = $_POST['email'];
    $checkquery = "select * from faculty where srdno='$srdn'";
    $checkres = mysqli_query($connect,$checkquery);
    if(mysqli_num_rows($checkres) ==1)
    {
        echo "<script>alert('User already Exists');</script>";
        header("refresh:0 ;url=./index.php"); 

    }
    else 
    {
        $query = "insert into faculty values('$srdn','$name','$subject','$email','$password');";
        $res= mysqli_query($connect,$query);
        echo "<script>alert('Registration Successful');</script>";
        header("refresh:0 ;url=./index.php"); 

    }
}
?>