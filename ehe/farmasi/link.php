<?php
$host='localhost';
$user='root';
$password='';
$dbname='farmasi';

$con=mysqli_connect($host,$user,$password,$dbname);
mysqli_select_db($con,$dbname)or die("Cannot choose Databases");
?>