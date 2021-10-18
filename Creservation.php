<?php
// assign data from hall booking form into variable
//$bkId = $_POST['book_ID'];
$bkS = $_POST['book_Start'];
$bkE = $_POST['book_End'];
$bkEve = $_POST['book_Event'];
$bkNme = $_POST['book_Name'];
$days = $_POST['numDays'];
//$bkPrice = $_POST['book_Price'];
//$bkStat = $_POST['book_Status'];
$cliId = $_POST['Cli_ID'];
$hallId = $_POST['Hall_ID'];

// Connection to the server and datbase
$dbhost = 'localhost';
$username = 'root';
$password = '';
$db = 'elexieshall';

$dbc = mysqli_connect ($dbhost,$username,$password,$db);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: ".mysqli_connect_error();
}

$bkId="Null";
$bkStat="PENDING";

if($hallId == "B001")
{
	$bkPrice = $days *  500.00;
}

else if ($hallId == "S001")
{
	$bkPrice = $days *  750.00;
}

else if($hallId == "G001")
{
	$bkPrice = $days *  1000.00;
}


// SQL statement to insert data from form into table hall booking
$sql="insert into `hall_booking`(`BOOK_ID`,`BOOK_START`,`BOOK_END`,`BOOK_EVENT`,`BOOK_NAME`, `BOOK_PRICE`, `BOOK_STATUS`,`CLIENT_ID`,`HALL_ID`) values ($bkId,'$bkS','$bkE','$bkEve','$bkNme','$bkPrice','$bkStat','$cliId','$hallId')";

$results= mysqli_query($dbc,$sql);
if ($results)
{
	mysqli_commit($dbc);
	//display message box Record Been Added
	print '<script>alert("Succesfully book hall.");</script>';
	
	//print receipt
	echo "<body style='background-color:Aquamarine;'>";
	echo "<br><br><br><br><h2 align='center'> RECEIPT </h2>";
	echo "<p align='center'> CLIENT ID : $cliId ";
	echo "<p align='center'> HALL ID : $hallId ";
	echo "<p align='center'>TOTAL BOOKING PRICE : RM $bkPrice ";
	echo "<br><br><br><a align='center' href = 'Hall Booking.php'>BACK TO HALL BOOKING</a>";
	echo "<br><br><br><h2 align='center'>THANK YOU FOR USING OUR SERVICE</h2>";
	echo "<p><h2 align='center'>HAVE A GOOD DAY :)</h2>";
	
	
}
else
{ 
	mysqli_rollback($dbc);
	//display error message box
	print '<script>alert("Book hall is failed.");</script>';
	//go to bookroom page
	print '<script>window.location.assign("Hall Booking.php");</script>';
}
?>