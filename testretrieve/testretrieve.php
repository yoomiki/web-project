<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM persons");
?>

<!DOCTYPE html>
<html>
 <head>
 <title> Retrieve data</title>
 <link rel="stylesheet" type="text/css" href="http://localhost:8012/login_user_project/css/bootstrap.min.css">
 </head>
<body>

<?php
if (mysqli_num_rows($result) > 0) {
?>
  
  
  <div class="container col-lg-6" >
    <table class="table table-striped table-bordered">
        <thead class="table-dark"> 
          <th scope="col">User</th>
          <th scope="col">Password</th>
        </thead>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["passwd"]; ?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
  </div>


 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>