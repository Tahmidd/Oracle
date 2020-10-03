<html>
<head>
	<title>Project</title>
	
</head>
<body>
	<form method="post" name="f1"  action="deleteusers.php">
		<fieldset>
			<legend><b>user delete</b></legend>
			
				
				
				<tr><td>User ID:</td></tr>
				<tr><td><input type="u_id" name="u_id"></td></tr>
				
				
				
					
				</tr>
				<tr><td><p>---------------</p></td></tr>
			
				
					
				<tr>
				
					<td>
						<input type="submit" name="deleteusers" value="Delete user">
						
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
if(isset($_POST['deleteusers'])){
		$u_id = $_POST['u_id'];
		$uname = $_POST['uname'];
		$package = $_POST['package'];
		$location = $_POST['location'];	
		

		
		if(empty($u_id)==true){
			echo "User ID required!";
		}
		
		
			else{
            $conn = oci_connect('system', 'sys', 'localhost/XE');
			$s = oci_parse($conn, "delete from customer where u_id='$u_id'");     
            oci_execute($s);
		header('location:adminhome.php');
		
}
	}
			


	

?>


