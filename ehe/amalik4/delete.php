<?php
include 'config.php';

$id=$_GET['id'];

$query= "DELETE FROM datapelajar WHERE id='$id'";

if($resutlt=mysqli_query($con,$query)) {
	echo "BERJAYA PADAM";
	header('location:senarai_pelajar.php');
}
else {
	echo "TIDAK BERJAYA";
}
?>