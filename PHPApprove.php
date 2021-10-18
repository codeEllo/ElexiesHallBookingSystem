<?php 

if (isset ($_GET["action"]))
{
	if($_GET["action"] == "approve"){
		$BOOK_ID = $_GET["BOOK_ID"];
		$sql = "UPDATE hall_booking SET status='approved' WHERE BOOK_ID='$BOOK_ID'";
		$results = mysqli_query($dbc, $sql);
		if($results){
			echo '<script>alert("approved success!");</script>';
		}
	}	
	echo '<script>alert("Approved success!");</script>';
}

if (isset ($_GET["delete"]))
{	
	echo '<script>alert("Declined success!");</script>';
}
?>
<?php
 $dbc = mysqli_connect ("localhost","root","","elexies_hall"); 
	if (mysqli_connect_error())     
	{         
		echo "Failed to connect to MySQL: " . mysqli_connect_error();  
	}    
	$sql = "SELECT * FROM hall_booking WHERE status='submitted' ORDER BY BOOK_ID = '$BOOK_ID'"; 
	$results = mysqli_query($dbc, $sql);
	$row = mysqli_fetch_assoc($results);  
?>