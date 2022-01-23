<?php 
session_start();

if(isset($_POST['submit']))
{
	$uname = $_POST['uname'];
	$pass = $_POST['password'];
	$con = mysqli_connect("localhost","root","","rba");
	$role = $_POST['role'];
		$sql = mysqli_query($con, "SELECT * from user where user = '".$uname."' AND pass = '".$pass."'")or die(mysqli_error($con));
		$rw = mysqli_fetch_array($sql);
		if ($rw['role'] == 'admin')
		{
			session_start();
			$_SESSION['id']=$uname;
			header("location:admin.php");
		}
		else if ($rw['role'] == 'bideveloper')
		{
			session_start();
			$_SESSION['id']=$uname;
			header("location:bideveloper.php");
		}
		else if ($rw['role'] == 'blockchaindeveloper')
		{
			session_start();
			$_SESSION['id']=$uname;
			header("location:bcdeveloper.php");
		}
		else if ($rw['role'] == 'datascientist')
		{
			session_start();
			$_SESSION['id']=$uname;
			header("location:ds.php");
		}
		else if ($rw['role'] == 'dataanalyst')
		{
			session_start();
			$_SESSION['id']=$uname;
			header("location:da.php");
		}
		else
		{
			echo "<script>alert('invalid username or password for selected role')</script>";
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
	<h1>Login</h1><br><br>
	<input type="text" name="uname" placeholder="Enter Username" autocomplete="off"><br><br>
	<input type="password" name="password" placeholder="Enter password" autocomplete="off"><br><br>
	<br>
	<input type="submit" name="submit" value="Login"><br>
	<a href="signup.php" style="color:white;">SIGNUP</a>

</form>
</body>
</html>