<?php
$HALL_ID=$_POST['HALL_ID']; 
$HALL_TYPE = $_POST['HALL_TYPE']; 
$HALL_PRICE=$_POST['HALL_PRICE']; 
$HALL_CAPACITY=$_POST['HALL_CAPACITY'];  
$ADM_ID="admin2021";
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
$sql = "DELETE FROM customer where HALL_ID='$HALL_ID'";  
 
$results= mysqli_query($dbc,$sql);  
if ($results)
{ 
	mysqli_commit($dbc);    
	//display message box Record Been Added  
	print '<script>alert("Record Had Been Added");</script>';   
	print '<script>window.location.assign("IntHhall.php");</script>';  
} 
else 
{  
	mysqli_rollback($dbc);   
	//display error message box  
	print '<script>alert("Data Is Invalid , No Record Been Added");</script>';    
	echo ("Error description: " . mysqli_error($dbc));
} 
?> 