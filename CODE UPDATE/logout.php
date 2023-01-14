<?php
	session_start();
	
	
	echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Are you sure want to logout?')
		window.location.href='client_login.php';
	</SCRIPT>");
	session_start();
	session_unset();
	//session_destroy();
	session_destroy();
?>