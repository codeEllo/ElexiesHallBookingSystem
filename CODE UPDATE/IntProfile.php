<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:admin_login.php");
}

ob_start();
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ELEXIES HALL</title>
    
    <!-- Profile Styles-->
    <link href="../elexies/admin/assets/css/profile.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap Styles-->
    <link href="../elexies/admin/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../elexies/admin/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="../elexies/admin/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                        <a class="active-menu" href="IntProfile.php"><i class="fa fa-dashboard"></i>User Dashboard</a>
                    </li>
					
					

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           PROFILE<small> accounts </small>
                        </h1>
                    </div>
                </div> 

                
            <div class="row">
            <div class="col-md-12">
            <div class="main-content">
            
      <!-- Table -->
         <div class="card card-profile shadow">
           <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#"> 
                      
                  </a>
                </div>
              </div>
            </div>

            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="UpdateProfile.php" class="btn btn-sm btn-info mr-4">Update Profile</a>
                <a href="admin_login.php" class="btn btn-sm btn-default float-right">Logout</a>
              </div>
            </div>
              
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                     <script> 
                      // Use of Date.now() method 
                      var d = Date(Date.now()); 

                      // Converting the number of millisecond  
                      // in date string 
                      a = d.toString() 

                      // Printing the current date                     
                      document.write("Today date and time: " + a)  

                    </script> 
                  </div>
                </div>
              </div>
              <?php
            // Connection to the server and datbase
            $dbc = mysqli_connect ("localhost","root","","elexieshall");
            if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: ".mysqli_connect_error();
            }
            $sql = "select * from admin";
            $result = mysqli_query($dbc, $sql);
            while($row = mysqli_fetch_assoc($result))
            {
	       Print'
           <table align="center">
              <div class="text-center">
              <tr>
	           <th>Your ID</th>
	           <td> &nbsp &nbsp &nbsp &nbsp </td>
	           <td> <font color="#0000FF">'.$row['ADM_ID'].'</font></td>
              </tr>
              
              <tr>
	           <th>Name</th>
	           <td> &nbsp &nbsp &nbsp &nbsp </td>
	           <td> <font color="#0000FF">'.$row['ADM_NAME'].'</font></td>
              </tr>
              
              <tr>
	           <th>Phone Number</th>
	           <td> &nbsp &nbsp &nbsp &nbsp </td>
	           <td> <font color="#0000FF">'.$row['ADM_PHONE'].'</font></td>
              </tr>
              
              <tr>
	           <th>Email</th>
	           <td> &nbsp &nbsp &nbsp &nbsp </td>
	           <td> <font color="#0000FF">'.$row['ADM_EMAIL'].'</font></td>
              </tr>
              
              <tr>
	           <th>Password</th>
	           <td> &nbsp &nbsp &nbsp &nbsp </td>
	           <td> <font color="#0000FF">'.$row['ADM_PASS'].'</font></td>
              </tr>
            </table>
                
                ';
	}
	?>
                  
                  
                <hr class="my-4">
                <p>“Ability is what you’re capable of doing. Motivation determines what you do. Attitude determines how well you do it.” – Lou Holtz"</p>

              </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
                    
                                             </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
					
                </div>
            </div>
        </div>
    </div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../elexies/admin/assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../elexies/admin/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../elexies/admin/assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="../elexies/admin/assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
