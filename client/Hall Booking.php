<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Elexies Hall Booking</title>
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
  <!-- #header -->
  <!--==========================
  About Section
  ============================-->
  <style>
	  body{
  			background: url("img/hall.jpg") no-repeat fixed center;
			height: 125vh;
			background-size: cover;
    		background-position: center;
		}
	</style>
	
  <br>
  <br>
  <br>
  <br>
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">OUR HALL</h3>
          <div class="section-title-divider"></div>
        </div>
      </div>
    </div>
<div class="container about-container wow fadeInUp">
<div class="row" align="center">
<!--TYPE OF HALL-->
<div><span class="b"><h3><strong>BRONZE</strong></h3>
<p><strong>HALL ID: B001 </strong></p>
	<img src=" img/Bronze.jpg" width="266.67" height= "190" >
	<br>
	<table>
	<tr>
		<th>Capacity</th>
		<td> &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp  </td>
		<td>less than 200 people</td>
	</tr>
	<tr>
		<th>Suitable for</th>
		<td> &nbsp &nbsp  &nbsp  &nbsp  &nbsp  </td>
		<td>Parties, Workshop, Private event etc.</td>
	</tr>
		<tr>
		<th>Price</th>
		<td>&nbsp &nbsp  &nbsp  &nbsp  &nbsp </td>
		<td>RM 500 per Day </td>
	</tr>
	</table>
	<br>
	<div class="actions">
          <a href="#booking" class="btn-get-started">Book Now</a>
    </div>
	</span> 
	
	<!--Silver Hall-->
	<span class="b"><h3><strong>SILVER</strong></h3>
	<p><strong>HALL ID: S001 </strong></p>
	<img src= "img/Silver.jpg" width="266.67" height= "178">
	<br>
	<table> 
	<tr>
		<th>Capacity</th>
		<td> &nbsp &nbsp  &nbsp  &nbsp  &nbsp  </td>
		<td>250-500 people</td>
	</tr>
	<tr>
		<th>Suitable for</th>
		<td> &nbsp &nbsp  &nbsp  &nbsp  &nbsp </td>
		<td>Conferences, Seminar, Wedding etc.</td>
	</tr>
		<tr>
		<th>Price</th>
		<td>&nbsp &nbsp  &nbsp  &nbsp  &nbsp </td>
		<td>RM 750 per Day </td>
	</tr>
	</table>
	<br>
	<div class="actions">
          <a href="#booking" class="btn-get-started">Book Now</a>
    </div></span> 
	
	<!--Golden Hall-->
	<span class="b"><h3><strong>GOLDEN</strong></h3>
	<p><strong>HALL ID: G001 </strong></p>
	<img src=" img/Golden.jpg" width="266.67" height= "178">
	<br>
	<table> 
	<tr>
		<th>Capacity</th>
		<td> &nbsp &nbsp  &nbsp  &nbsp  &nbsp  </td>
		<td>less than 1200 people</td>
	</tr>
	<tr>
		<th>Suitable for</th>
		<td>&nbsp &nbsp  &nbsp  &nbsp  &nbsp </td>
		<td>Exhibition, Social Event etc.</td>
	</tr>
	<tr>
		<th>Price</th>
		<td>&nbsp &nbsp  &nbsp  &nbsp  &nbsp </td>
		<td>RM 1000 per Day </td>
	</tr>
	</table>
	<br>
	<div class="actions">
          <a href="#booking" class="btn-get-started">Book Now</a>
    </div></span> 	
</div>
</div>
</div>	
<br><br><br><br><br>
<!--Booking Form-->
<br><br><br><br><br>
<div class="container wow fadeInUp">
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Make your reservation</h1>
						</div>
						<form name="booking" method="post" action="Creservation.php">
						<div class="form-group">
								<input class="form-control"  type="text" name="Cli_ID" style="color:blue" required="required"/>
								<span class="form-label">Client ID</span>
							</div>
						<div class="form-group">
								<input class="form-control"  type="text" name="Hall_ID" style="color:blue" required="required"/>
								<span class="form-label">Hall ID</span>
						</div>
						<div class="form-group">
								<div class="form-checkbox">
									<label for="bronze">
										<input type="radio" id="bronze" name="hall-type">
										<span></span>Bronze
									</label>
									<label for="silver">
										<input type="radio" id="silver" name="hall-type">
										<span></span>Silver
									</label>
									<label for="golden">
										<input type="radio" id="golden" name="hall-type">
										<span></span>Golden
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" name="book_Start" style="color:blue" required="required">
										<span class="form-label">Start Date</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" name="book_End"  style="color:blue" required="required">
										<span class="form-label">End Date</span>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<input class="form-control" type="number" name="numDays" min="1" style="color:blue" required="required"/>
								<span class="form-label">Number Of Day</span>
							</div>
							<div class="form-group">
									<select class="form-control"  name="book_Event" required="required">
									<option value="" selected hidden>Type of Event</option>
									<option value="Corporate/Company">Corporate/Company</option>
									<option value="Private/Parties">Private/Parties</option>
									<option value="Public">Public</option>
									<option value="Wedding">Wedding</option>
									</select>
									
									<span class="form-label">Type of Event</span>
								</div>
							<div class="form-group">
								<input class="form-control"  type="text" name="book_Name" style="color:blue" required="required"/>
								<span class="form-label">Event Name</span>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Book Now</button>
							</div>
							
							
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

<!--==========================
can't delete this code
============================-->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>
</body>
</html>