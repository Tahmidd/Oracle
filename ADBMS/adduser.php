<html>
<head>
	<title>Project</title>
	
</head>
<body>
	<form method="post" name="f1"  action="adduser.php">
		<fieldset>
			<legend><b>user add</b></legend>
			<table border="0" >
				
				
				<tr><td>User ID:</td></tr>
				<tr><td><input type="u_id" name="u_id"></td></tr>
				<tr><td>USER NAME:</td></tr>
				<tr><td><input type="uname" name="uname"></td></tr>
				<tr><td>PACKAGE:</td></tr>
				<tr><td><input type="package" name="package"></td></tr>
				<tr><td>LOCATION:</td></tr>
				<tr><td><input type="location" name="location"></td></tr>
				
				
					
				</tr>
				<tr><td><p>---------------</p></td></tr>
			
				
					
				<tr>
				
					<td>
						<input type="submit" name="adduser" value="Add user">
						
					</td>
					
					<td><a href="adminhome.php">GO BACK </a></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>

<?php

session_start();
if(isset($_POST['adduser'])){
		$u_id = $_POST['u_id'];
		$uname = $_POST['uname'];
		$package = $_POST['package'];
		$location = $_POST['location'];	
		

		
		if(empty($u_id)==true || empty($uname)==true || empty($package) == true ||empty($location) == true)
		{
			echo "fill all!";
		}
		
		
			else{
            $conn = oci_connect('system', 'sys', 'localhost/XE');
			 $s = oci_parse($conn, "insert into customer(u_id,uname,package,location) values('{$u_id}','{$uname}','{$package}','{$location}')");       
            oci_execute($s);
		header('location:adminhome.php');
		
}
	}
			


	

?>


