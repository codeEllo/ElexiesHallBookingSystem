<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>HALL BOOKING FORM</title>

    <!-- Icons font CSS-->
    <link href="../elexies/admin/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../elexies/admin/assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../elexies/admin/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../elexies/admin/assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../elexies/admin/assets/css/main.css" rel="stylesheet" media="all">
    
</head>

<body>
    <?php
        $BOOK_ID = $_GET['BOOK_ID'];
        // Connection to the server and datbase
    $dbc = mysqli_connect ("localhost","root","","elexieshall"); 
	if (mysqli_connect_error())     
	{         
		echo "Failed to connect to MySQL: " . mysqli_connect_error();  
	}    
	$sql = "select * from hall_booking where BOOK_ID = '$BOOK_ID'"; 
	$results = mysqli_query($dbc, $sql);
	$row = mysqli_fetch_assoc($results);  
?>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Booking Hall Form</h2>
                </div>
                <div class="card-body">
                    <form action="PHPBookingUpdate.php" method="POST">
                        
                        <div class="form-row m-b-55">
                            <div class="name">ID</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="BOOK_ID" value='<?=$row['BOOK_ID'];?>' readonly>
                                            <label class="label--desc">BOOKING</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="CLIENT_ID" value='<?=$row['CLIENT_ID'];?>' readonly>
                                            <label class="label--desc">CLIENT</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="HALL_ID" value='<?=$row['HALL_ID'];?>' readonly>
                                            <label class="label--desc">HALL</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-row m-b-55">
                            <div class="name">Date</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="BOOK_START" value='<?=$row['BOOK_START'];?>' readonly>
                                            <label class="label--desc">START DATE</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="BOOK_END" value='<?=$row['BOOK_END'];?>' readonly>
                                            <label class="label--desc">END DATE</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-row m-b-55">
                            <div class="name">Event</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="BOOK_EVENT" value='<?=$row['BOOK_EVENT'];?>' readonly>
                                            <label class="label--desc">TYPE</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="BOOK_NAME" value='<?=$row['BOOK_NAME'];?>' readonly>
                                            <label class="label--desc">NAME</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Total Price</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="BOOK_PRICE" value='<?=$row['BOOK_PRICE'];?>' readonly>
                                </div>
                            </div>
                        </div>
                        
                       
                        <div class="form-row">
                            <div class="name">Status</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                       <select name="BOOK_STATUS" value='<?=$row['BOOK_STATUS'];?>'>
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Approved</option>
                                            <option>Declined</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div align="center">
                            <button class="btn btn--radius-2 btn--red" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/vendor/datepicker/moment.min.js"></script>
    <script src="assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->