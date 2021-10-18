<?php
$bookid = $_GET['bkid'];
$dbc = mysqli_connect ("localhost", "root", "", "elexieshall");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "DELETE FROM hall_booking where BOOK_ID ='$bookid'";
$result = mysqli_query($dbc, $sql);
if($result)
{
mysqli_commit($dbc);
Print '<script>alert("Booking Record Successfuly Deleted.");</script>';
Print '<script>window.location.assign("myHistory.php");</script>';
}
else
{
mysqli_rollback($dbc);
Print '<script>alert("Booking Record is failed to be Deleted.");</script>';
Print '<script>window.location.assign("myHistory.php");</script>';
}
?>