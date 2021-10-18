<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:admin_login.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ELEXIES HALL</title>
	<!-- Bootstrap Styles-->
    <link href="../elexies/admin/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../elexies/admin/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
    <!-- Custom Styles-->
    <link href="../elexies/admin/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="../elexies/admin/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="IntHome.php"><?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="IntProfile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="admin_login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="IntHome.php"><i class="fa fa-dashboard"></i>Booking Status</a>
                    </li>
                    <li>
                        <a  href="IntClient.php"><i class="fa fa-desktop"></i>Client Details</a>
                    </li>
					<li>
                        <a href="IntHhall.php"><i class="fa fa-bar-chart-o"></i>Hall Details</a>
                    </li>
                    <li>
                        <a href="IntReport.php"><i class="fa fa-qrcode"></i> Report</a>
                    </li>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Report Booking Details<small> </small>
                        </h1>
                    </div>
                 
                 
                </div> 
                 <!-- /. ROW  -->
				 
		<form action='' method='post'>
			
			<br>
			<inpit type='submit' value='Filter'></inpit>
		</form>
				 <br><br>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Book Id</th>
                                            <th>Client ID</th>
                                            <th>Client Name</th>
                                            <th>Hall Type</th>
                                            <th>Status</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <?php
                                        // Connection to the server and datbase
                                        $dbc = mysqli_connect ("localhost","root","","elexieshall");
                                        if (mysqli_connect_errno())
                                        {
                                        echo "Failed to connect to MySQL: ".mysqli_connect_error();
                                        }
                                        $sql = "SELECT B.BOOK_ID, C.CLIENT_ID, C.CLIENT_NAME, H.HALL_TYPE, B.BOOK_STATUS, B.BOOK_PRICE FROM HALL_BOOKING B, CLIENT C, HALL H WHERE B.CLIENT_ID = C.CLIENT_ID AND B.HALL_ID = H.HALL_ID";
                                        
                                        $result = mysqli_query($dbc, $sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            Print '<tr>
                                            <td>'.$row['BOOK_ID'].'</td>
                                            <td>'.$row['CLIENT_ID'].'</td>
                                            <td>'.$row['CLIENT_NAME'].'</td>
                                            <td>'.$row['HALL_TYPE'].'</td>
                                            <td>'.$row['BOOK_STATUS'].'</td>
                                            <td>'.$row['BOOK_PRICE'].'</td>';}
                                        ?>
                                        
                                   </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
