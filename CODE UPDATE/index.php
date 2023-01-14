<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Elexies Hall - Welcome</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="elexies.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css_homepage/style_index.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="img/elexies.png" alt="Imperial" >
        </div>

        <h1>Welcome to Elexies Hall</h1>
        <h2>We provide <span class="rotating">all types of hall based on customer needed</span></h2>
        <!--<div class="actions">
          <a href="#about" class="btn-get-started">Learn More</a>
          <a href="#portfolio" class="btn-services">Our Hall</a>
        </div>-->
      </div>
    </div>
  </section>

  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <img src="img/elexies.png" alt="Imperial" /></img>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <!--<li><a href="#services">Our Hall</a></li>-->
          <li><a href="#portfolio">Our Hall</a></li>
        <!--  <li><a href="#testimonials">Testimonials</a></li>-->
          <li><a href="team.php">Team</a></li>
		   <li><a href="#contact">Contact Us</a></li>
          <li class="menu-has-children" disabled><a>Sign In</a>
            <ul>
              <li><a href="admin_login.php">Admin</a></li>
             <!-- <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>-->
              <li><a href="client_login.php">Client</a></li>
            <!--  <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>-->
         
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">About Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Who Are We? And What Can We Do For You?</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-6 col-md-push-6 about-content">
          <h2 class="about-title">About Elexies</h2>
          <p class="about-text">
            Elexies is the Owner and Operator of Elexies Hall Reservation Website. Since 2019, Elexies has been working in the private organization that provides rent property such as Hall. It's Elexies Company. 
			We offers charm, sophistication and elegance halls rent at an affordable price. Elexies's Hall is located in Putrajaya, near the Shaftbury Putrajaya Mall Shopping Center. We have over 36,000 sq ft of event space to rent for you and create
			your memorable moment. 
          </p>
		  <p class="about-text">
            We have three different hallrooms to choose from. We take pride in providing a warm and elegant environment to host your small business meetings, wedding receptions, proms, graduation, birthday parties or retirement ceremonies.
          </p>
          <p class="about-text">
			To reduce the manual work for managing the booking, The Elexies Hall Reservation system is created and it provides a reliable and easy to use online reservation system for the clients. This reservation system can be intergrated within your existing website to allow
			hall bookings to be made 24/7, updating the hall information and availability seamlessly.
          </p>
          <!--<p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
            id est laborum
          </p>-->
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Services Section
  ============================-->
 <!-- <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Our Services</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-desktop"></i></div>
          <h4 class="service-title"><a href="">Lorem Ipsum</a></h4>
          <p class="service-description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title"><a href="">Dolor Sitema</a></h4>
          <p class="service-description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
          <h4 class="service-title"><a href="">Sed ut perspiciatis</a></h4>
          <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-photo"></i></div>
          <h4 class="service-title"><a href="">Magni Dolores</a></h4>
          <p class="service-description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-road"></i></div>
          <h4 class="service-title"><a href="">Nemo Enim</a></h4>
          <p class="service-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
          <h4 class="service-title"><a href="">Eiusmod Tempor</a></h4>
          <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>
      </div>
    </div>
  </section>-->

  <!--==========================
  Subscrbe Section
  ============================-->
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">How to Make a Booking?</h3>
          <p class="subscribe-text">Register an Official Account to make a book and See more detail about our best selected Hall</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          <a class="subscribe-btn" href="client_login.php">REGISTER NOW</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Porfolio Section
  ============================-->
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Our Hall</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Image Gallery of our top hall booking</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/wedding1.jpg);" disable>
            <div class="details" disable>
              <h4>GALLERY 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/wedding2.jpg);" disable>
            <div class="details">
              <h4>GALLERY 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/wedding3.jpg);" disable>
            <div class="details">
              <h4>GALLERY 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/wedding4.jpg);" disable>
            <div class="details">
              <h4>GALLERY 4</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/green.jpg);" disable>
            <div class="details">
              <h4>GALLERY 5</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/holl.jpg);" disable>
            <div class="details">
              <h4>GALLERY 6</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/holl2.jpg);" disable>
            <div class="details">
              <h4>GALLERY 7</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/holehole.jpg);" disable>
            <div class="details">
              <h4>GALLERY 8</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Testimonials Section
  ============================
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Testimonials</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/client-1.jpg" alt=""></div>
            <h4>Saul Goodman</h4>
            <span>Lawless Inc</span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/client-2.jpg" alt=""></div>
            <h4>Sara Wilsson</h4>
            <span>Odeo Inc</span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!--==========================
  Team Section
  ============================
  <section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Meet Elexies Team</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">We do everything with our core values of honesty, hard work, and trust.</p>
        </div>
      </div>
	  
	  

      <div class="row">
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
		
		<div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
           
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
            <h4>Sarah Jhinson</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-3.jpg" alt=""></div>
            <h4>William Anderson</h4>
            <span>CTO</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-4.jpg" alt=""></div>
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Got a question? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i> 
              <p>PUTRA PERDANA PRESINT 1<br>PUTRAJAYA. MALAYSIA</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>info@elexies.co</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+03-4567890</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Elexies Clan</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
            -->
            Design is developed by Elexies Clan</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

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

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
