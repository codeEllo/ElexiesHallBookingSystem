<?php
function  createConfirmationmbox(){
    echo '<script type="text/javascript"> ';
    echo ' function openulr(client_login) {';
    echo '  if (confirm("Are you sure you want to cancel your registration?")) {';
    echo '    document.location = client_login;';
    echo '  }';
    echo '}';
    echo '</script>';
}
?>

<html>
<?php
createConfirmationmbox();
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elexies Hall - Register New Account</title>
	 <link href="elexies.ico" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style_register.css">
	
	<style>
	 body { 
            animation: fadeInAnimation ease 0.5s; 
            animation-iteration-count: 1; 
            animation-fill-mode: forwards; 
        } 
        @keyframes fadeInAnimation { 
            0% { 
                opacity: 0; 
            } 
            100% { 
                opacity: 1; 
            } 
        } 
	</style>
</head>

<body>
    <div class="login-dark">
        <form action="register.php"  method="post">
            <h2 style="text-align:center; font-family:verdana;">REGISTER FORM</h2>
            <!--<div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>-->
            <div class="form-group"><input class="form-control" type="text" name="ID" placeholder="Create ID : C100-C900" required></div>
			<div class="form-group"><input class="form-control" type="text" name="name" placeholder="Full Name" required></div>
			<div class="form-group"><input class="form-control" type="text" name="phonenum" placeholder="Phone Number : 012-3456789" required></div>
			<div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email: example@email.com" required></div>
			<div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password : *****" required></div>
            <div class="form-group"><input class="form-control" type="text" name="user" placeholder="Admin ID" required></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">REGISTER</button>
			<a href="javascript:openulr('client_login.php');" class="forgot" ><br>CANCEL</a></div>
		</form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>