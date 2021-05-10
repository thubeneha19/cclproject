<?php
include('conn.php');
session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="css/s2.css">
	<style type="text/css">
		td{
		width:200px;
		height:20px;
		}
	</style>
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
			<h1 style="color:black;">Stock Blood List</h1>
			<center><div id="form">
			<table cellpadding="10">
				<tr>
					<td><center><b><font color="blue">Name</font></b></center></td>
					<td><center><b><font color="blue">Qty</font></b></center></td>
				</tr><br><br>
				<tr>
					<td><center>O+</center></td>
					<td><center>
						<?php
						$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
						echo $row=$q->rowcount();
						?>
					</center></td>
				</tr>
				<tr>
					<td><center>AB+</center></td>
					<td><center>
						<?php
						$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
						echo $row=$q->rowcount();
						?>
					</center></td>
				</tr>
				<tr>
					<td><center>AB-</center></td>
					<td><center>
						<?php
						$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
						echo $row=$q->rowcount();
						?>
					</center></td>
				</tr>
				
				
			</table>
	
			</div></center>
			
</div>
		<div id="footer">
			<p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
		</div>
		
	</div>
</div>
</body>

</html>