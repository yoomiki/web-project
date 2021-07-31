<?php
     include 'config.php';
     $username = $_POST['username'];  
     $password = $_POST['password'];  
      
        $sql = "select * from login where username = '$username'"; 
        $result = mysqli_query($conn,$sql);
        if ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            if ($row['password']==$password) {
                //echo "Welcome " . $username;
                header('location:http://localhost:8012/login_user_project/dashboard/BS3/dashboard.html');
                exit;
            }else{
                echo "Invalid";
            }
        }

        /*
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $count = mysqli_num_rows($result); 
    
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }*/   
?>