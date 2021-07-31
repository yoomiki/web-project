<!DOCTYPE html>
<html lang="en">
<head>
<!--<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
/-->
    <title>Login System</title>

    <link rel="stylesheet" type="text/css" href="http://localhost:8012/login_user_project/css/bootstrap.min.css">
 <!--   <script type="text/javascript" src="file:///D:/Bootstrap/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script> -->

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-10 col-lg-6">
                <h2>Login Here</h2>
                <form action="testinsert.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="col-sm-6 col-md-2 col-lg-6">
                <h2>Register Here</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>