<?php
	function dbconnect(){
		$conn = oci_connect("system", "sys", "localhost/XE", "admin");
		return $con;

	}


?>


