<?php
	session_start();
	
	
	echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Are you sure want to logout?')
		window.location.href='index.php';
	</SCRIPT>");
	
	session_destroy();
?>