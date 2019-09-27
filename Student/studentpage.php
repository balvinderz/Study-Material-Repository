<?php
session_start();
if(!isset($_SESSION['roll'])) 
header("refresh:0 ;url=./index.php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Student</title>
</head>
<style>
.mybtn 
{
        width : 100px !important;
}
</style>

<body>

        
        <div >
                <h1 align="center" > <img src="rait_new.png" alt="" width="220px" height="150px" align="left"> Student</h1>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        

            
                <?php
                $roll = $_SESSION['roll'];
                include '../connect.php';
                $getsemandbranchquery ="select sem,branch from student where rollno='$roll'";
                $res= mysqli_query($connect,$getsemandbranchquery);
                while($row= mysqli_fetch_assoc($res))
                {
                        $sem = $row['sem'];
                        $branch = $row['branch'];
                }
                $query ="select * from subject where branch='$branch' and sem='$sem' ";
                $res = mysqli_query($connect,$query);
                while($row=mysqli_fetch_assoc($res))
                {$subjectname = $row['subjectname'];
                        echo " <div>
                <button type='submit' class='mybtn btn-lg btn-outline-danger'>$subjectname</button>
        </div>";
                }
                ?>
        </div>
</body>
</html>