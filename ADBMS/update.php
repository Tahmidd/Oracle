<html>
<head>
	<title>Project</title>
	
</head>
<body>
	<form method="post" name="f1"  action="update.php">
		<fieldset>
			<legend><b>user update</b></legend>
			
				
				
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
						<input type="submit" name="update" value="update user">
						
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
if(isset($_POST['update'])){
		$u_id = $_POST['u_id'];
		$uname = $_POST['uname'];
		$package = $_POST['package'];
		$location = $_POST['location'];	
		

		
			if(empty($u_id)==true){
			echo "USER ID required!";
		}
		

		
		 if (empty($uname)==true) 
		 	{
			echo "User Name required!";
			}

         else{
            $conn = oci_connect('system', 'sys', 'localhost/XE');
			 $s = oci_parse($conn, "update customer SET uname='{$uname}' where u_id='{$u_id}'"); 
			oci_execute($s);
		header('location: adminhome.php');
		
				}
		



		 if (empty($package)==true) 
		 	{
			echo "Package detail required!";
			}

			

           else{
              $conn = oci_connect('system', 'sys', 'localhost/XE');
			 $s = oci_parse($conn, "update customer SET package='{$package}' where u_id='{$u_id}'"); 
			oci_execute($s);
		header('location: adminhome.php');
				}
		

		  if (empty($location)==true) 
		 	{
			echo "Location information required!";
			}

			

           else{
              $conn = oci_connect('system', 'sys', 'localhost/XE');
			 $s = oci_parse($conn, "update customer SET location='{$location}' where u_id='{$u_id}'"); 
			oci_execute($s);
		header('location: adminhome.php');
				}
			}
		

	


			


	

?>


