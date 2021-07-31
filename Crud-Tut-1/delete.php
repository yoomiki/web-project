<?php
     include "database.php";
     
     if (isset($_GET['name'])) {
         $name= $_GET['name'];

         $sql= "DELETE FROM crud WHERE name='$name'";

         $result = mysqli_query($conn,$sql);

         if ($result) {?>
            <center><?php echo "Inserted";?></center>
            <?php
            }else{
             echo "Error" . mysqli_error($conn);
         }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><a href="read.php">Show Table</a></center>
</body>
</html>