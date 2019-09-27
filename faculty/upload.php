<?php 
session_start();
if(!isset($_SESSION['srdn']))
header("refresh:0 ;url=./index.php"); 

include '../connect.php';
if(isset($_POST))
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $filetoupload =$_FILES['file'];
    $sem = $_POST['sem'];
    $subject = $_POST['subject'];
    
    $target_dir =  "../documents/"; 
    $target_file = $target_dir.basename($filetoupload['name']);
    $uploadok=1;
    $path = $target_file;
    move_uploaded_file($filetoupload['tmp_name'],$target_file);
    $srdn = $_SESSION['srdn'];
    $query = "insert into studymaterial(srdno,title,description,subject,sem,path) values('$srdn','$title','$description','$subject','$sem','$path');";
    echo $query;
    $res = mysqli_query($connect,$query);
    echo "<script>alert('Successfully uploaded file');</script>";

    header("refresh:0 ;url=./facultypage.php"); 

}
?>