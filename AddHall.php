<!doctype html>

<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Add New Hall</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="admin/icons/styles.css">
		
		<link rel="stylesheet" href="css/bootstrap-custom.css">
		<link rel="stylesheet" href="css/registration-form.css">

		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600' rel='stylesheet' type='text/css'>
		<link href="../elexies/admin/assets/css/reghall.css" rel="stylesheet" type="text/css">
    <style>
body {
  background-image: url('assets/img/hall.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style> 
</head>
	<body>
        <br><br><br>
		<!-- Register Form -->
		<div class="form-wrapper"> <!-- Form-wrapper only for positioning -->
			<form action="PHPHallAdd.php" method="post" class="fcorn-register container">
			<div class="row">	
                <p class="register-info">Note: All fields are required.</p>
                <label>Hall ID</label>
                <p><input type="text" name="HALL_ID" placeholder="Enter Hall ID" required>
				   <span class="extern-type">Capital Letter Only.</span>
				</p>
                <label>Hall Type</label>
				<p><input type="text"  name="HALL_TYPE" placeholder="Enter Hall Type" required>
					<span class="extern-type">Capital Letter Only.</span>
				</p>
                &nbsp;&nbsp;&nbsp;&nbsp;<label>Hall Price</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <label>Hall Capacity</label>
                <p class="col-md-6"><input type="number" name="HALL_PRICE" placeholder="Price" min="1" required></p>
                <p class="col-md-6"><input type="number" name="HALL_CAPACITY" placeholder="Capacity" min="1" required></p>
                 
				
        </div>
        	<p class="register-toggle">
					<label for="register-agree" class="toggle-label" data-on="YES" data-off="NO">
						<input type="checkbox" id="register-agree" class="toggle-input">
						<span class="toggle-handle"></span>
					</label>
					<span class="info">Confirm all the details ?</a></span>
				</p>
				<p class="register-submit"><input type="submit" value="Submit"></p>
			</form>
		</div>
	
	</body>
</html>
