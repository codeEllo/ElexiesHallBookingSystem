<?php
$BOOK_ID=$_POST['BOOK_ID'];
$BOOK_START=$_POST['BOOK_START'];
$BOOK_END=$_POST['BOOK_END'];
$BOOK_EVENT=$_POST['BOOK_EVENT'];
$BOOK_NAME=$_POST['BOOK_NAME'];
$BOOK_PRICE=$_POST['BOOK_PRICE'];
$BOOK_STATUS=$_POST['BOOK_STATUS'];
$CLIENT_ID=$_POST['CLIENT_ID'];
$HALL_ID=$_POST['HALL_ID'];

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
$sql = "update `hall_booking` set `BOOK_STATUS`='$BOOK_STATUS' where `BOOK_ID`='$BOOK_ID'";   
 
$results= mysqli_query($dbc,$sql);  
if ($results)
{ 
	mysqli_commit($dbc);    
	//display message box Record Been Added  
	print '<script>alert("Record Had Been Added");</script>';   
	//go to CatList.php page 
	print '<script>window.location.assign("IntHome.php");</script>';  
} 
else 
{  
	mysqli_rollback($dbc);   
	//display error message box  
	print '<script>alert("Data Is Invalid , No Record Been Added");</script>';   
	//go to CatList.php page  
	echo ("Error description: " . mysqli_error($dbc));
	//print '<script>window.location.assign("CatList.php");</script>'; 
} 
?> 