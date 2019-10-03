<?php
session_start();
if(!isset($_SESSION['srdn']))
header("refresh:0 ;url=./index.php"); 
include '../connect.php';

$srdn= $_SESSION['srdn'];
$query = "select * from studymaterial where srdno='$srdn'";
$res = mysqlI_query($connect,$query);
$titlelist = array();
$pathlist = array();

while($row= mysqli_fetch_assoc($res))
{
        array_push($titlelist,$row['title']);
        array_push($pathlist,$row['path']);
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
.white 
{
        background : #fff !important;
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
                        <button type="submit" class="mybtn btn-lg btn-outline-danger">View Uploaded</button>
                </div>
                <div >
                        <button type="submit" class="mybtn btn-lg btn-outline-danger">Other's Uploaded</button>
                </div>
        </div>
        <div class="col-md-9">
                <?php 
                for($i=0;$i<sizeof($titlelist);$i++)
                {
                        $title = $titlelist[$i];
                        $path = $pathlist[$i];
                        ?>
                          <div class="row white">
                        <div class="col-md-9">
                        <p><?php echo $title; ?></p>
                        </div>
                        <div class="col-md-3">
                        <button onclick="download('<?php echo $path ?>')">Download</button>
                        </div>
                        </div>
                        <?php 
                }
            
               ?>
        </div>
        </div>
</div>
<script>
function download(path)
{
        fetch(path)
  .then(resp => resp.blob())
  .then(blob => {
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.style.display = 'none';
    a.href = url;
    // the filename you want
    a.download = 'file';
    document.body.appendChild(a);
    a.click();
    window.URL.revokeObjectURL(url);
  })
  .catch(() => alert('oh no!'));
        console.log("soja"); 
        var a = document.createElement("a");
        a.href=path;
        a.target="_blank";
      //  a.click();
}
</script>
</body>
</html>