<?php
	session_start();
	
	
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'elexies_hall');
	
	$name = $_POST['user'];
	$pass = $_POST['password'];
	
	$s = "select * from client where CLIENT_ID = '$name' && CLIENT_PASS = '$pass'";
	
	$result = mysqli_query($con, $s);
	
	$num = mysqli_num_rows($result);
	
	if($num == 1){		
	
		$_SESSION['user'] = $name;		
		header('location:myAcc.php');//betul
	}else{	
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Incorrect Combination of ID & Password!')
		window.location.href='client_login.php';
	</SCRIPT>");	 //salah
			
		}
	
?>