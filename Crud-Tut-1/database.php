<?php
$url='localhost';
$username='myUser';
$password='myPassword';
$schema='mySchema';
$conn=mysqli_connect($url,$username,$password,$schema);
if(!$conn){
 die('Could not Connect My Sql:' .mysqli_connect_error());
}
?>