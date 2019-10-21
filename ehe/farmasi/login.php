<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href="stylesheet.css">
</head>
<body >

<?php
include('link.php');
session_start();

$USERNAME = $_POST['username'];
$PASSWORD = $_POST['password'];

if ($USERNAME&&$PASSWORD) 
{
	$con = mysqli_connect($host,$user,$password,$dbname)
	or die("Not Connect to the database");
	$db = mysqli_select_db($con,$dbname) or die("incorrect database");

	$query = mysqli_query($con, "SELECT * FROM user WHERE username= '$USERNAME' AND password='$PASSWORD'");

	$numrows = mysqli_num_rows($query);

	if($numrows!==0)
	{
		while ($row = mysqli_fetch_assoc($query)) 
		{
			$username = $row['USERNAME'];	
			$password = $row['PASSWORD'];
		}

		if($USERNAME==$USERNAME && $PASSWORD==$PASSWORD)
		{
			echo "You Have Log In";
			$_SESSION['username'] = $USERNAME;
			
			if($dblevel == 1)
			{
				header("location: admin.php");
			}
			
			else
				header("location: user.php");
		}
		else
			?>

			<div id = 'box'>
			<center>
			<span class='normal'>Your Password Wrong!!</span>
			</center>
			<div class='btn-index'>
			<a href="index.php" class="btn-link">RE-ENTER</a><br><br><b>OR</b><br><br>
			<a href="register.php" class="btn-link">REGISTER</a>
			</div>
			</div>

			<?php
	}
	else
		?>

		<div id = 'box'>
		<center>
		<span class='normal'>That user no exist!</span>
		</center>
		<div class='btn-index'>
		<a href="index.php" class="btn-link">RE-ENTER</a><br><br><b>OR</b><br><br>
		<a href="register.php" class="btn-link">REGISTER</a>
		</div>
		</div>

<?php
}
else
	?>

	<div id = 'box'>
	<center>
	<span class='normal'>Please enter username and password</span>
	</center>
	<div class='btn-index'>
	<a href="index.php" class="btn-link">RE-ENTER</a><br><br><b>OR</b><br><br>
	<a href="register.php" class="btn-link">REGISTER</a>
	</div>
	</div>

<?php
	die("");


?>

