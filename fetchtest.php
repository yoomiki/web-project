<?php
     $conn= mysqli_connect('localhost', 'root','','sms');
     if (!$conn) {
         echo "connection Failed";
     }

     $sql="SELECT * FROM login";
     $result=mysqli_query($conn, $sql);
     $data=array();
     if (mysqli_num_rows($result)>0) {
         while ($row= mysqli_fetch_array($result)) {
             $data= $row;
             echo "<pre>";
             print_r($data);
             echo "</pre>";
         }
         
     }
?>