<?php

$servername="localhost";
$username="root";
$password="";
$db="Crud_task";
$conn=mysqli_connect($servername,$username,$password,$db);
if($conn->connect_error){
    die("ohh error".$conn->connect_error);
}


?>