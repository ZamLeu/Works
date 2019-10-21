<html>
<body>
<?php
include('config.php');

if(isset($_POST['submit']))
{

$id=($_POST['id']);
$nama_pelajar=($_POST['nama_pelajar']);
$no_kp=($_POST['no_kp']);

$query1=mysqli_query($con, "INSERT INTO datapelajar 
	values('$id','$nama_pelajar','$no_kp')");

if($query1)
{
header("location:senarai_pelajar.php");
}
}
?>
<center>
<fieldset style="width:500px;">
<h4>TAMBAH REKOD PELAJAR</h4>

<form method="post" action="add_v2.php">
ID PELAJAR: <input type="text" name="id"><br>
NAMA PELAJAR : <input type="text" name="nama_pelajar"><br>
NO KP : <input type="text" name="no_kp"><br>
<br><input type="submit" name="submit"><br>
</form>

</fieldset>
</center>
</body>
</html>
