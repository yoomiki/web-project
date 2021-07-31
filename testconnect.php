<?php
    $host='localhost';
    $user='myUser';
    $passwd='myPassword';
    $schema='mySchema';

    $mysqli= mysqli_connect($host, $user, $passwd, $schema);

    if (!$mysqli) {
        echo 'Connection failed<br>';
        echo 'Error number:'. mysqli_connect_errno() .'<br>';
        echo 'Error message:'. mysqli_connect_error() .'<br>';
        die();
    }
echo"Hello";

    echo 'Successfully connected<br>';
?>
