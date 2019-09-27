<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Signup</title>
</head>
<body>
        <div class="jumbotron jumbotron-fluid">


                <div class="d-flex justify-content-center align-items-center">
                        <img src="rait_new.png" alt="" srcset="">
                </div>
                <div class="d-flex justify-content-center align-items-center">
                        <h1 class="display-3 font-weight-bold">
                </div>
        
        
                <div class="d-flex justify-content-center align-items-center">
                        <form method="post" action="register.php">
                                <div class="form-group">
                                        <label for="exampleInputName">Full name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="full name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Roll No.</label>
                                        <input type="text" class="form-control" id="roll" name="roll" placeholder="Roll no.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBranch">Branch</label>
                                        <input type="text" class="form-control" id="branch" name="branch" placeholder="branch">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputSem">Sem</label>
                                        <input type="text" class="form-control" id="sem" name="sem" placeholder="sem">
                                    </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Confirm Password</label>
                                            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
                                        </div>
                                
                            
                               
                                
                               
        
                                <div class="text-center">
                                        <button type="submit" class="btn btn-danger">Sign Up</button>
                                </div>
        
                                <small id="emailHelp" class="form-text text-muted">Alredy have an account? Log in <a
                                                href="./index.php" class="text-danger">here</a>.</small>
        
                        </form>
                </div>
        
        
        </div>
</body>
</html>