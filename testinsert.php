<?php
        $link = mysqli_connect("localhost","myUser", "myPassword", "mySchema");

        if ($link === false) {
            die("Error: Could not connect." . mysqli_connect_error());
        }

        $sql= "INSERT into persons VALUES ('Yoo', 'paswd')";

        if(mysqli_query($link, $sql)){
            echo "Inserted";
        }
        else{
            echo "Failed" . mysqli_error($link);
        }

        mysqli_close($link);
?>