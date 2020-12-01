<?php
require_once "../vendor/autoload.php";
//use App\classes\Login;
//Login::adminLogin;
$link= new App\classes\Login();
$errorMessageLogin="";
if (isset($_POST ['btn'] )){
    $errorMessageLogin= $link->adminLogin($_POST);
}
?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" >
    <title>Admin Login</title>
</head>
<body>
    <div class="container" style="margin-top: 200px;">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <div class="card">
                    <div class="card-title" style="text-align: center">
                        <h5>Admin Login Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="card-text" >
                            <p> <?php echo $errorMessageLogin;  ?> </p>
                        </div>
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" name="email" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password" class="form-control" id="inputPassword3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" name="btn" class="btn btn-success btn-block">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>