<?php
session_start();
if(!isset($_SESSION['srdn']))
header("refresh:0 ;url=./facultypage.php"); 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Uploaded</title>
</head>
<body>
<div class="container-fluid">

<div class="row">
        <img src="rait_new.png" alt="" width="220" height="200">
</div>
<div class="row">
<div class="col-md-3">
        <div class="row">
                <h1>Upload</h1>
        </div>
        <div class="row">
                <h1>View Uploaded</h1>
        </div>
        <div class="row">
                <h1>Other's Uploaded</h1>
        </div>
</div>
<div class="col-md-9">
    <div class="row">
        <div class="col-md-9">
            <p>Title</p>
        </div>
    </div>
</div>
</div>

</body>
</html>