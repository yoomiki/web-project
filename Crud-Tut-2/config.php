<?php
      $servername ="localhost";
      $username = "myUser";
      $password= "myPassword";
      $dbname= "mydb";

      $conn= new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      }else{
          echo "Success";
      }
?>