<?php
include 'config.php';

$query="select id, nama_pelajar, no_kp from datapelajar";
$result=mysqli_query($con,$query);
?>
<table width="1000" align="center" cellspacing="0" cellpadding="0" border="1">
<h1><p align="center">Senarai Pendaftaran Pelajar</p></h1>
	<td align="center" bgcolor="lightpink">ID</td>
	<td align="center" bgcolor="lightpink">Nama Pelajar</td>
	<td align="center" bgcolor="lightpink">No KP</td>
	<td align="center" bgcolor="lightpink">Delete</td>

<?php
while($datapelajar=mysqli_fetch_array($result)){
	$id=$datapelajar["id"];

echo "<tr>";
echo "<td>".$datapelajar["id"]."</td>";
echo "<td>".$datapelajar["nama_pelajar"]."</td>";
echo "<td>".$datapelajar["no_kp"]."</td>";

echo "<td>","<a href=\"delete.php?id=$id\">Delete<a/>";

echo "</tr>";
}
echo "</table>";
?>

<br>

<center>
	<a href="add_v2.php"><input type="submit" name="submit" value="Daftar Pelajar"></a>
</center>
</body>