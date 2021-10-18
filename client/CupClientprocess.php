<?php
 $clientid = $_GET['cliId'];
 $nama = $_POST['nme'];
 $phone = $_POST['phNum'];
 $em = $_POST['email'];
 $pa = $_POST['pass'];
 
$dbc = mysqli_connect ("localhost", "root", "","elexies_hall");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$ad="AD001";

$sql = "update `client` set
`CLIENT_ID` ='$clientid' ,`CLIENT_NAME`='$nama',`CLIENT_PHONE`='$phone',`CLIENT_EMAIL`='$em',`CLIENT_PASS`='$pa',`ADM_ID`='$ad' where
`CLIENT_ID`='$clientid'";

$result = mysqli_query($dbc, $sql);
if($result)
{
	mysqli_commit($dbc);
	Print '<script>alert("Details is successfully updated.");</script>';
	Print '<script>window.location.assign("client_Acc.php");</script>';
}
else
{
	mysqli_rollback($dbc);
	Print '<script>alert("Details is failed to update.");</script>';
	Print '<script>window.location.assign("client_Acc.php");</script>';
}
?>