<?php 
session_start();

if(isset($_POST['submit']))
{
	$uname = $_POST['uname'];
	$pass = $_POST['password'];
	$con = mysqli_connect("localhost","root","","rba");
	$role = $_POST['role'];
	if($role=='admin')
	{
		$sql = mysqli_query($con, "INSERT INTO `user` (`user`, `pass`, `role`) VALUES ('".$uname."', '".$pass."', 'admin')")or die(mysqli_error($con));
		if ($sql)
		{
			header("location:index.php");
		}
		else
		{
			echo "<script>alert('invalid username or password for selected role')</script>";
		}
	}
	else if($role=='bideveloper')
	{
		$sql = mysqli_query($con, "INSERT INTO `user` (`user`, `pass`, `role`) VALUES ('".$uname."', '".$pass."', 'bideveloper')")or die(mysqli_error($con));
		if ($sql)
		{
			header("location:index.php");
		}
		else
		{
			echo "<script>alert('invalid username or password for selected role')</script>";
		}
	}
	else if($role=='blockchaindeveloper')
	{
		$sql = mysqli_query($con, "INSERT INTO `user` (`user`, `pass`, `role`) VALUES ('".$uname."', '".$pass."', 'blockchaindeveloper')")or die(mysqli_error($con));
		if ($sql)
		{
			header("location:index.php");
		}
		else
		{
			echo "<script>alert('invalid username or password for selected role')</script>";
		}
	}
	else if($role=='dataanalyst')
	{
		$sql = mysqli_query($con, "INSERT INTO `user` (`user`, `pass`, `role`) VALUES ('".$uname."', '".$pass."', 'dataanalyst')")or die(mysqli_error($con));
		if ($sql)
		{
			header("location:index.php");
		}
		else
		{
			echo "<script>alert('invalid username or password for selected role')</script>";
		}
	}
	else
	{
		$sql = mysqli_query($con, "INSERT INTO `user` (`user`, `pass`, `role`) VALUES ('".$uname."', '".$pass."', 'datascientist')")or die(mysqli_error($con));
		if ($sql)
		{
			header("location:index.php");
		}
		else
		{
			echo "<script>alert('invalid username or password for selected role')</script>";
		}
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	
<form class="box" action="" method="post">
	<h1>Signup</h1><br><br>
	<input type="text" name="uname" placeholder="Enter Username" autocomplete="off"><br><br>
	<input type="password" name="password" placeholder="Enter password" autocomplete="off"><br><br>
	<select name="role" id="role" style="width: 170px;">
		<option>Select your role</option>
		<option value="admin">Admin</option>
		<option value="bideveloper">BI Developer</option>
		<option value="blockchaindeveloper">BlockChain Developer</option>
		<option value="datascientist">Data Scientist</option>
		<option value="dataanalyst">Data Analyst</option>
	</select><br>
	<br>
	<input type="submit" name="submit" value="Signup"><br>
	<a href="index.php" style="color:white;">LOGIN</a>

</form>
</body>
</html>