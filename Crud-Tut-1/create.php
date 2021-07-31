<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $link = mysqli_connect("localhost", "myUser", "myPassword", "mySchema");

    if ($link === false) {
        die("Connection Error");
    }

    $name = mysqli_real_escape_string($link, $_REQUEST['name']);
    $email = mysqli_real_escape_string($link, $_REQUEST['email']);

    $sql = "INSERT INTO crud VALUES('$name','$email')";

    if (mysqli_query($link, $sql)) {
        ?> 
        <center><?php echo "Inserted";?></center>
        <?php
    } else {
        echo "Failed" . mysqli_error($link);
    }
    ?>
    <center><a href="read.php">View Table</a></center>
</body>
</html>