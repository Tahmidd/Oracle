<html>
<head>
	<title>Mini Project</title>
	<link rel="stylesheet" type="text/css" href="login.css" />
</head>
<body>
	<form method="POST" action="signincheck.php">
		<fieldset>
			<legend><b>LOGIN</b></legend>
			<table border="0" >
				<tr> 
					<td><p>User Email:</p></td> 
					
				</tr>
				
				<tr>
					<td><input type="email" name="uemail" value="">  </td>
				</tr>
				
				
					
				<tr>	
					<td>Password:</td>
				</tr>
				
				<tr><td><input type="password" name="upword" value=""></td></tr>
				
					<td>
						<input type="submit" name="submit" value="submit">
						
					</td>
					
					
				</tr>
				<tr><td><a href="registration.php">Register</a></td></tr>
			</table>
		</fieldset>
	</form>
</body>
</html>