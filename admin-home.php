<?php
include('conn.php');
session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s2.css">
</head>
<body>
<div id="full">
	<div id="inner_full">
		<div id="header"><h2 style="text-decoration:none;color:white;">Blood Bank Management System</h2></div>
		<div id="body">
			<br>
			<?php
			$un=$_SESSION['un'];
			if(!$un)
			{
				header("Location:index.php");
			}
			?>
			<h1 align="center" style="color:black;">Welcome Admin</h1><br><br>
			<ul>
				<li><a href="donor-reg.php">Donor Registration</a></li>
				<li><a href="donor-list.php">Donor List</a></li>
				<li><a href="stock-blood-list.php">Stock Blood List</a></li>
			</ul><br><br><br><br><br>
		
</div>
		<div id="footer">
			<p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
		</div>
		
	</div>
</div>
</body>

</html>