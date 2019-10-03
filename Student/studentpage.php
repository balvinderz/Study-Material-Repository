<?php
session_start();
if(!isset($_SESSION['roll']))
{
  header("refresh:0 ;url=./index.php"); 
}
else{
  include '../connect.php';
  $roll = $_SESSION['roll'];
  $query = "select sem,branch from student where rollno='$roll' ";
  $res= mysqli_query($connect,$query);
  $sem="";
  $branch="";
  while($row=mysqli_fetch_assoc($res))
  {
    $sem= $row['sem'];
    $branch=$row['branch'];
  }
  $subjectarray = array();
  $facultyarray= array();
  $query = "select * from subject where branch='$branch' and sem='$sem' ";
  $res = mysqli_query($connect,$query);
  $i=0;
  while($row= mysqli_fetch_assoc($res))
  {
    $subject = $row['subjectname'];
    array_push($subjectarray,$row['subjectname']);
    array_push($facultyarray,array());
    $query2 = "select * from faculty where subject='$subject' ";
  //  echo $query2;
    $res2=  mysqli_query($connect,$query2);
    while($row2= mysqli_fetch_assoc($res2))
    {
      array_push($facultyarray[$i],$row2['name']);
    }
    
    $i++;
  }
} 
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
.mybutton 
{
  cls
}
.sidenav {
  height: auto;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 24.9%;
  left: 0;
  background-color:;
  overflow-x: hidden;
  padding-top: ;
  border: 1px solid grey;

}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: red;
  display: block;
 <!-- border-bottom: 1px solid grey;-->
}

.dropdown-btn{
        padding: 6px 6px 6px 6px;
        width:200px;
  text-decoration: none;
  font-size: 25px;
  color: #d9534f;
  display: block;
  background-color: white;
}
#meradiv
{
  position : absolute;
}
.sidenav a:hover, .dropdown-btn:hover {
  color: white;
  background-color: #d9534f;
}

.active {
  background-color:#d9534f ;
  color: white;
}

.dropdown-container {
  display: none;
  background-color: lightgrey;
}

.fa-caret-down {
  float: right;
  padding-right: 8px;
}

hr{ 
  height: 1px;
  color: grey;
  background-color: grey;
  border: none;
}

.white 
{
  background : white !important;
}
</style>



<body>
                <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                                <div class="navbar-header">
                                        <img src="data:image/jpeg;base64,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" width="200px" height="120px">
                                </div>
                                
                                <div class="navbar-header">
                                    <h1>Study Material Repository</h2>
                                </div>
                                
                                
                                <form action = "logout.php" method="POST" >
                                  
                                <button class="btn btn-lg btn-danger navbar-btn mybutton" type="submit">Log out</button>
</form>
                        </div>
                </nav>
<hr>
                <div class="sidenav">
                       
                              <?php
                              for($i=0;$i<sizeof($subjectarray);$i++)
                              {
                                $subject = $subjectarray[$i];
                                echo ' <button class="dropdown-btn">'.$subject.'
                               
                                </button>
                                <div class="dropdown-container">';
                                for($j=0;$j<sizeof($facultyarray[$i]);$j++)
                                echo '
                                <form class="white">
                                <input type="hidden" name="faculty" value="'.$facultyarray[$i][$j].'">
                                <input type="hidden" name="subject" value="'.$subject.'">

                                <input type="submit" class="btn" value="'.$facultyarray[$i][$j].'"></input></form>';
                                
                                  
                               echo ' </div></button>';
                              }
                              ?>
                          
                    </div>
                      <?php 
                      if(isset($_GET['faculty']) && isset($_GET['subject']))
                      {
                        $facultyname= $_GET['faculty'];
                        $subject =$_GET['subject'];
                          $query = "select * from faculty where name ='$facultyname' and subject='$subject'";
                          $res= mysqli_query($connect,$query);
                          while($row= mysqli_fetch_assoc($res))
                          $srdn =$row['srdno'];
                          $query2 ="select * from studymaterial where srdno='$srdn'";
                          $res2 = mysqli_query($connect,$query2);
                          $titlearray = array();
                          $patharray = array();
                          $filenamearray = array();
                          while($row = mysqli_fetch_assoc($res2))
                          {

                            $title = $row['title'];
                            $path = $row['path'];
                            $filename = $row['filename'];
                            array_push($filenamearray,$filename);
                            array_push($titlearray,$title);
                            array_push($patharray,$path);
                          }
                          
                           ?>
                           <div class="container-fluid">
                             <div class="row">
                                <div class="col-xl-10 offset-xl-2">
                                  <div class="row">
                                    <?php
                                    for($i=0;$i<sizeof($titlearray);$i++)
                                    {
                                      $path = $patharray[$i];
                                      $title = $titlearray[$i];
                                      $filename = $filenamearray[$i];
                                      ?>
                                      <div class="col-xl-9">
                                        <p>
                                          <?php echo $title; ?>
                                    </p>
                                    </div>
                                      <div class="col-xl-3">
                                      <button class="btn btn-link"onclick="download('<?php echo $path ?>','<?php echo $filename ?>')">Download</button>

                                    </div>
                                      <?php 
                                    
                                    }
                                    ?>
                                </div>
                             </div>
                             
                            </div>
                           </div>
                           <?php 
                      }
                      ?>
                      <script>
                        function download(path,filename)
{
        fetch(path)
  .then(resp => resp.blob())
  .then(blob => {
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.style.display = 'none';
    a.href = url;
    // the filename you want
    a.download = filename;
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
                        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
                        var dropdown = document.getElementsByClassName("dropdown-btn");
                        var i;
                        
                        for (i = 0; i < dropdown.length; i++) {
                          dropdown[i].addEventListener("click", function() {
                          this.classList.toggle("active");
                          var dropdownContent = this.nextElementSibling;
                          if (dropdownContent.style.display === "block") {
                          dropdownContent.style.display = "none";
                          } else {
                          dropdownContent.style.display = "block";
                          }
                          });
                        }
                        </script>
                      
        
        

                
              
                
        
</body>
</html>