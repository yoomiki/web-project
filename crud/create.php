

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="http://localhost:8012/login_user_project/css/bootstrap.min.css">
  </head>
<body>

<center><h2>Signup Form</h2></center>

<form action="" method="POST">
  <div><center>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname">
    <br>
    Last name:<br>
    <input type="text" name="lastname">
    <br>
    Email:<br>
    <input type="email" name="email">
    <br>
    Password:<br>
    <input type="password" name="password">
    <br>
    Gender:<br>
    <input type="radio" name="gender" value="Male" default>Male
    <input type="radio" name="gender" value="Female">Female
    <br><br>
    <input type="submit" name="submit" value="submit">
    <a href="view.php">View</a>
    </center>
  </div>
</form>
<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];

		//write sql query

		$sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";

		// execute the query

		$result = $conn->query($sql);
    ?>
    <center>
    <?php
        if ($result == TRUE) {
          echo "New record created successfully.";
        }else{
          echo "Error:". $sql . "<br>". $conn->error;
        }
    
        $conn->close();
    
      }   
    ?>
		</center>
</body>
</html>