<?php 

if(isset($_POST['create'])){
    function validate($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }

    $name= validate($_POST['name']);
    $email= validate($_POST['email']);

    echo $name;
} 
?>