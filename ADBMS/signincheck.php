<?php
	session_start();
        global $conn;
        $conn = oci_connect('system', 'sys', 'localhost/XE');
        if(isset($_POST['submit'])){
            $uemail = $_POST['uemail'];
            $upword = $_POST['upword'];
            $s = oci_parse($conn, "select uemail,upword from users where uemail='$uemail' and upword='$upword'");       
            oci_execute($s);
            $row = oci_fetch_all($s, $res);
            if($row){
                    
                    $_SESSION['user']=$user;
                    $_SESSION['time_start_login'] = time();
                    header('location: adminhome.php');
            }else{

                echo "wrong password or email";
            }
        }
    

     ?>

	