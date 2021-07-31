<?php
     include "config.php";
     
     if (!isset($_POST['username'], $_POST['password']) ) {
         exit('Invalid Inputss');
     }

     $stmt= $conn->prepare('SELECT username, password FROM login WHERE username=?');

     if ($stmt) {
         $stmt->bind_param('s', $_POST['username']);
         $stmt->execute();

         $stmt->store_result();

         $stmt->close();
     }

     if ($stmt->num_rows > 0) {
         $stmt->bind_result($username, $password);
         $stmt->fetch();
         
         $verify= password_verify($_POST['password'], $password);
         
         if ($verify) {
             echo "Welcome";
         }
         else{
             echo "Try again";
         }
     }
?>