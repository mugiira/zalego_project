

<?php
$servname="localhost";
$username="root";
$pass="";
$db="student";
//create connection
$conn=mysqli_connect($servname,$username,$pass,$db);
//checking the connection
if(!$conn){
    die("You are not connected to the database:".mysqli_connect_error());

}





?>