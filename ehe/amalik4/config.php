<?php
//create connection
$con = mysqli_connect("localhost","root","","student");
if(mysqli_connect_error()){
	echo "Gagal sambungkan pangkalan data mysql:".mysqli_connect_error();
}
?>