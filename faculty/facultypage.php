<?php
session_start();
if(!isset($_SESSION['srdn']))
header("refresh:0 ;url=./index.php"); 
 else 
 {
         include '../connect.php';
         $srdn = $_SESSION['srdn'];
         // TODO : Convert subject to Subject Array
         $query = "select * from faculty where srdno='$srdn'";
         $res = mysqli_query($connect,$query);
         while($row = mysqli_fetch_assoc($res))
         $subject = $row['subject'];
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Faculty</title>
</head>
<style>
.mybtn
{
        width : 200px !important;
}
</style>
<body>
        <div class="container-fluid">

                        <nav class="navbar navbar-inverse">
                                        <div class="container-fluid">
                                                <div class="navbar-header">
                                                        <img src="./rait_new.png" width="220px" height="90px">
                                                </div>
                                                
                                                <div class="navbar-header">
                                                    <h1>Study Material Repository</h2>
                                                </div>
                                                
                                                
                                                <form action = "logout.php" method="POST" >
                                                  
                                                <button class="btn btn-lg btn-danger navbar-btn" type="submit">Log out</button>
                </form>
                                        </div>
                                </nav>
                <hr>
        <div class="row">
        <div class="col-md-3">
                <div >
                        <button onclick="window.location='./facultypage.php'" class="mybtn btn-lg btn-outline-danger ">Upload</button>
                
                </div>
                
                <div >
                <button onclick="window.location='./viewuploaded.php'" class="mybtn btn-lg btn-outline-danger ">View Uploaded</button>
                </div>
                <div >
                        <button type="submit" class="mybtn btn-lg btn-outline-danger">Other's Uploaded</button>
                </div>
        </div>
        <div class="col-md-9">
                <form enctype="multipart/form-data" method="post" action="upload.php">
                        <div class="form-group">
                          <label for="Title">Title</label>
                          <input type="text" class="form-control" id="title" name='title'  placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                          <label for="description">Description</label>
                        <textarea class="form-control" name="description"></textarea>
                </div>

                        <div class="form-group">
                          <label for="subject">Subject</label>
                        <select name="subject">
                                <?php
                                echo '<option value="'.$subject.'">'.$subject.'</option>';
                                ?>
</select>
                        </div>
                        <div class="form-group">
                                        <label for="subject">SEM</label>
                                      <select name="sem">
                                              <option value="V">V</option>
              </select>
                                      </div>
                       
                                <input type="file" name='file'>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
        </div>
        </div>
</div>

</body>
</html>