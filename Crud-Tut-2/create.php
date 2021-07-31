<?php
    include "config.php";    
//if the form's submit button is clicked, we need to process the form
    if (isset($_POST['submit'])) {
        //get variables from the form
        $first_name=  $_POST['firstname'];
        $last_name = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];

        $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name', '$email','$password','$gender')";

        // execute the query

        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "New record created successfully.";
        }else{
            echo "Error:". $sql . "<br>". $conn->error;
        }
        $conn->close();
    }
        
?>


<!DOCTYPE html> 
<head>    
    <link rel="stylesheet" href="http://localhost:8012/login_user_project/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>YouTube tutorial</title>
</head>
<body>
    <div class="container">
      <form action="" method="POST">
        <h1 class="display-4 text-center">Create</h1>
          <div class="mb-1">
          <label for="name" class="form-label">First Name</label>
          <input type="text" name="firstname" class="form-control" id="name" required>
          </div>
          <div>
            <label for="email" class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control" id="email" aria-describedby="emailHelp" required>
          </div>          
          <div>
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="email" aria-describedby="emailHelp">
          </div>      
          <div class="mb-3">
            <label for="email" class="form-label">Gender</label>
            <input type="text" name="gender" class="form-control" id="email" aria-describedby="emailHelp">
          </div>    
          <button type="submit" class="btn btn-primary mb-3">Submit</button>
          <a href="#">View</a>
        </form>
    </div>
</body>
</html>