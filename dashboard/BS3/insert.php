<?php
     include "config.php"; 
     $f_name = $_POST['fname'];
     $l_name = $_POST['lname'];
     $gender = $_POST['gender'];
     $dob = $_POST['dob'];
     $pgname = $_POST['pgname'];
     $pggender = $_POST['parent'];
     $occupation = $_POST['occupation'];
     $address = $_POST['address'];
     $state = $_POST['state'];     
     $yoa = $_POST['yearofadmission'];
     $class = $_POST['class'];

     $sql= "INSERT INTO `student`(`f_name`, `l_name`, `gender`, `date`, `p_g_name`, `p_g_relation`, `occupation`, `address`, `state`, `y_o_a`, `class`) VALUES ('$f_name]','$l_name','$gender','$dob','$pgname','$pggender','$occupation','$address','$state','$yoa','$class')";

     if (mysqli_query($conn, $sql)) {
        ?> 
        <center><?php echo "Inserted";?></center>
        <?php
    } else {
        echo "Failed" . mysqli_error($link);
    }
?>

