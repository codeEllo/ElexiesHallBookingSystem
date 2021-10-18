<?php
	session_start();
	
	
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'elexieshall');
	
	$name = $_POST['user'];
	$pass = $_POST['password'];
	
	$s = "select * from admin where ADM_ID = '$name' && ADM_PASS = '$pass'";
	
	$result = mysqli_query($con, $s);
	
	$num = mysqli_num_rows($result);
	
	if($num == 1){		
	
		$_SESSION['user'] = $name;
		header('location:IntHome.php');//betul
	}else{	

echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Incorrect Combination of ID & Password!')
		window.location.href='admin_login.php';
	</SCRIPT>");	//salah
			
		}
	
?>