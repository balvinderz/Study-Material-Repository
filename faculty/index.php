<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
        <div class="jumbotron jumbotron-fluid">


                <div class="d-flex justify-content-center align-items-center">
                    <img src="rait_new.png" alt="" srcset="">
                </div>
                
            
            
                <div class="d-flex justify-content-center align-items-center">
                    <form action="./checklogin.php" method="post">
                        
                        <div class="form-group">
                            <label for="exampleInputsnrd">Snrd NO.</label>
                            <input type="text" class="form-control" id="srdn" name="srdn" placeholder="Enter Srdn NO.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
            
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">Login</button>
                        </div>
                        
            
                       
                        
                        <small id="emailHelp" class="form-text text-muted">Don't have an account yet? Sign up <a
                                href="./signup.php" class="text-danger">here</a>.</small>
            
                    </form>
                </div>
            
            
            </div>
</body>
</html>