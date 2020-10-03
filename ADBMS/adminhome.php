<?php
	session_start();

?>



<html>
	<head>
			<title> Project </title>
	</head>
	<body>
	
	<center>
		<table border="0" >
			<tbody>	
					<tr height="100">
						
						<td width="300">
							<input type="text" name="search">
							<input type="button" name="sc" value="Search">
						</td>
						
						
						<td><p>welcome</p></td>
						
						
						<td>
						<p>Admin</p>
						</td>
						
					</tr>
					
					<tr>
						<td colspan="8" style="border-top:2px solid #888;"></td>	
					</tr>
					
					<tr>
					<td><p>Name:</p></td>
					<td></td>
					</tr>
					<tr>
					<td><p>Email:</p></td>
					<td></td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
					<td><button onclick="document.location='userlist.php'">Manage Users</button></td>
					<td><button onclick="document.location='adduser.php'">Add Users</button></td>
					<td><button onclick="document.location='deleteusers.php'">Delete Users</button></td>
					<td><button onclick="document.location='update.php'">Update Users</button></td>
					
					</tr>
			
			</tbody>
		</table>
	</center>
	</body>
	
</html>

