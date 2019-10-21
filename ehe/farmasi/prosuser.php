<?php
include("link.php");

$NAME = $_POST['name'];
$USERNAME = $_POST['username'];
$EMAIL = $_POST['email'];
$PASSWORD = $_POST['password'];

$query="insert into user (name,username,email,password) 
		values ('$NAME','$USERNAME','$EMAIL','$PASSWORD')";

if (mysqli_query($con,$query)){
	echo " - Data berjaya direkod";
	header('location:index.php');
}
else{
	echo " - Data tidak berjaya direkod";
}
?>