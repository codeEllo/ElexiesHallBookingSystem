<?php
$ADM_ID="A100"; 
$ADM_NAME = $_POST['ADM_NAME']; 
$ADM_PHONE=$_POST['ADM_PHONE']; 
$ADM_EMAIL=$_POST['ADM_EMAIL'];  
$ADM_PASS=$_POST['ADM_PASS'];  

// Connection to the server and datbase
$dbhost='localhost';
$username='root';
$password=' ';
$db='elexieshall';
$dbc = mysqli_connect ("localhost","root","","elexieshall");
if (mysqli_connect_error())    
{         
	echo "Failed to connect to MySQL: ".mysqli_connect_error();   
}  
 
// SQL statement to insert data from form into table customer
$sql = "update `admin` set `ADM_NAME`='$ADM_NAME',`ADM_PHONE`='$ADM_PHONE',`ADM_EMAIL`='$ADM_EMAIL',`ADM_PASS`='$ADM_PASS' where `ADM_ID`='$ADM_ID'";   
 
 $result = mysqli_query($dbc, $sql);  
	if($result)    
	{    
		mysqli_commit($dbc);  
		print '<script>alert("Staff Record Successfuly Updated.");</script>'; 
		print '<script>window.location.assign("IntProfile.php");</script>'; 
	}  
	else 
	{   
		mysqli_rollback($dbc);    
		print '<script>alert("Staff Record is failed to be Updated.");</script>';   
		print '<script>window.location.assign("UpdateProfile.php");</script>';  
	} 
?>