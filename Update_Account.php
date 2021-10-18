<html>
<head>
  <meta charset="utf-8">
  <title>Elexies Hall</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="Client/favicon.ico" rel="shortcut icon">
  <!-- Google Fonts--->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" 
  rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="Client/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  </head>
<body>
 <!--==========================
  Header Section
  ============================-->
 <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/elexies.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="Home.php">Home</a></li>
          <li><a href="Home.php">About Us</a></li>
          <li><a href="Hall Booking.php">Hall Booking</a></li>
          <li><a href="myHistory.php">My History</a></li>
		  <li><a href="client_Acc.php">My Account</a></li>
		  <li><a href="">Log Out</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
 
<style>
	  body{
  			background: url("img/hall.jpg") no-repeat fixed center;
			height: 125vh;
			background-size: cover;
    		background-position: center;
		}
</style>
<?php

$dbc = mysqli_connect("localhost","root","","elexieshall");
if(mysqli_connect_errno()){
	echo "failed to connect to MySQL : ".mysqli_connect_error();
}
	
$cliId = $_GET['cliId'];
$sql= "select * from client where CLIENT_ID = '$cliId'";

	$result = mysqli_query($dbc,$sql);

	if(false === $result){
		echo mysqli_error();
	}

	$row = mysqli_fetch_assoc($result)
	
?>
<br><br><br><br>	
  <div align="center">
  <div class="reg-input-field">
        <h3>Please Fill-out All Fields If You Want To Update Your Profile</h3>
        <form action="CupClientprocess.php? cliId=<?php echo $cliId;?>" method="post">
          <div class="form-group">
            <label>Client ID</label>
            <input type="text" class="form-control" name="CliID" value='<?=$row['CLIENT_ID'];?>' style="width:20em;" disabled />
          </div>
		  <br><br>
          <div class="form-group">
            <label>Client Name</label>
            <input type="text" class="form-control" name="nme" style="width:20em;" placeholder="Enter your Name" value='<?=$row['CLIENT_NAME'];?>' required />
          </div>
		   <br><br>
          <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" name="phNum" style="width:20em;" placeholder="Enter your Phone Number" value='<?=$row['CLIENT_PHONE'];?>' required />
          </div>
		  <br><br>
          <div class="form-group">
            <label>Email Address</label>
            <input type="text" class="form-control" name="email" style="width:20em;"  placeholder="Enter your Email Address" value='<?=$row['CLIENT_EMAIL'];?>' required/>
          </div>
	       <br><br>
			<div>
            <label>New Password</label>
            <input type="Password" class="form-control" name="pass" style="width:20em;"  placeholder="Enter your New Password" value='<?=$row['CLIENT_PASS'];?>'required />
          </div>
	       <br><br>
          <div class="form-group">
            <input type="submit" value="UPDATE PROFILE" onClick="return confirm('Are you sure?')"></center></td><br><br>
          </div>
		 </form>
      </div>
</div>
  </div>
</body>
</html>