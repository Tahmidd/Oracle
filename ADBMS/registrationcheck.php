<?php

session_start();
if(isset($_POST['signup'])){
		$name = $_POST['name'];
		$uemail = $_POST['uemail'];
		$upword = $_POST['upword'];
		$cpword = $_POST['cpword'];	
		

		
		if(empty($name)==true || empty($uemail)==true || empty($upword) == true ||empty($cpword) == true)
		{
			echo "fill all!";
		}
		elseif ($upword!=$cpword)
		 {
		echo "password doesn't match";	
		} 
		
			else{
            $conn = oci_connect('system', 'sys', 'localhost/XE');
			 $s = oci_parse($conn, "insert into users(name,uemail,upword,cpword) values('{$name}','{$uemail}','{$upword}','{$cpword}')");       
            oci_execute($s);
		header('location:login.php');
		
}
	}
			


	

?>


