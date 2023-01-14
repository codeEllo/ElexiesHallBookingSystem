<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:client_login.php");
}
?>

<!doctype html>
<html>
<head>

  <title>MY ACCOUNT</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">
  <!-- Google Fonts--->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" 
  rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
<meta charset="utf-8">
</head>

<body>
	 <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/elexies.png" alt="" title="" ></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="Home.php">Home</a></li>
          <li><a href="Home.php">About Us</a></li>
          <li><a href="Hall Booking.php">Hall Booking</a></li>
          <li><a href="myHistory.php">My History</a></li>
		  <li class="menu-active"><a href="client_Acc.php">My Account</a></li>
		  <li><a href="logout.php">Log Out</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
	<br>
	 <div class="container wow fadeInUp">
      <div class="row">
      </div>
    </div>
	<div class="container about-container wow fadeInUp"></div>
	
<style>
	  body{
  			background: url("img/bc2.jpg") no-repeat fixed center;
			height: 125vh;
			background-size: cover;
    		background-position: center;
		}
</style>

<h3 align="center" style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif';font-weight: bold;color: black;">MY ACCOUNT</h3>
<br>
<!--<p  style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif';font-weight: bold;color: black;">PLEASE ENTER YOUR CLIENT ID TO UPDATE YOUR ACCOUNT PROFILE :)</p>
	
<form method="post" action="client_Acc.php">
<label style="color: black">Search</label>
<input type="text" name="Cli_ID" placeholder="Enter Client ID" >
<input type="submit" name="SEARCH" value="ENTER">
	
</form>-->


	<table width="1300"  height="31" border="1" align="center" style="position: relative; top: 30px; background-color:#131313;">

	<tr>
	  
	  <th width="178"><font color="#37ECC1">CLIENT ID</font></th>
	  <th width="178"><font color="#37ECC1">CLIENT NAME</font></th>
	  <th width="178"><font color="#37ECC1">CLIENT PHONE</font></th>
	  <th width="178"><font color="#37ECC1">CLIENT EMAIL </font></th>
	  <th width="178"><font color="#37ECC1">CLIENT PASSWORD</font></th>
	  <th width="178" colspan="1"><font color="#37ECC1">Action</font></th>
	</tr>


	
<?php 
	
$dbc=mysqli_connect("localhost","root","","elexieshall");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL : ".mysqli_connect_error();
}

$id = $_SESSION["user"];

//if (isset($_POST["SEARCH"])) {	
//$cliId = $_POST["Cli_ID"];
$sql = "SELECT * FROM `client` WHERE CLIENT_ID = '$id'";
$result = $dbc->query($sql);

if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
			
	
		Print '<tr> 
		<td><font color="#37ECC1">'.$row['CLIENT_ID'].'</font></td>
		<td><font color="#37ECC1">'.$row['CLIENT_NAME'].'</font></td> 
		<td><font color="#37ECC1">'.$row['CLIENT_PHONE'].'</font></td>
		<td><font color="#37ECC1">'.$row['CLIENT_EMAIL'].'</font></td>
		<td><font color="#37ECC1">'.$row['CLIENT_PASS'].'</font></td>
		<td> <a href="Update_Account.php? cliId='.$row['CLIENT_ID'].'" class="btn btn-danger" role="button">UPDATE</a>
		</td> 
		
		</tr>';
		
	} 
	
}
	
 else{
			 echo "Client Not Found!!";
	 }
	
//}

?>
</table>
</body>
</html>