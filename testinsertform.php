<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserted Page</title>
    <link rel="stylesheet" href="http://localhost:8012/login_user_project/css/bootstrap.min.css">
    <link rel="icon" href="http://localhost:8012/login_user_project/LGH.svg.png" type="image/gif" sizes="16x16">
</head>

<body>
<?php 
    $link= mysqli_connect("localhost","myUser", "myPassword", "mySchema");
    if($link===false){
        die("Error" . mysqli_connect_error());
    }

    $user= mysqli_real_escape_string($link, $_REQUEST['user']);
    $pwd= mysqli_real_escape_string($link, $_REQUEST['pwd']);

    $query = "Insert into persons VALUES('$user','$pwd')";

    if(mysqli_query($link,$query)){
        echo "Inserted Successfully"; 
    }else{
        echo "Insert Failed" . mysqli_error($link);
    }
    mysqli_close($link);
    
?>
<form method="get" action="http://localhost:8012/login_user_project/testretrieve/testretrieve.php">
    <button type="submit" class="btn btn-primary">Show Table</button>
</form>

</body>
</html>