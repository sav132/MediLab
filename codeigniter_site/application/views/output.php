<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Diabetes</title>
  <meta name="description" content="Bootstrap Theme">
  <meta name="keywords" content="diabetes heart disease">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <!--banner-->
    <section id="banner" class="banner">
      <div class="bg-color">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="col-md-12">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
  				        <span class="icon-bar"></span>
  				        <span class="icon-bar"></span>
  				        <span class="icon-bar"></span>
  				      </button>
                <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>assets/img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
              </div>
              <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#banner">Home</a></li>
                  <li class=""><a href="#service">Services</a></li>
                  <li class=""><a href="#about">About</a></li>
                  <li class=""><a href="#testimonial">Testimonial</a></li>
                  <li class=""><a href="#contact">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
          <h1 class="jumbotron">The prediction is :<?php echo $value;?>%</h1>
        </nav>
        
      </div>
    </section>

	
	<!--footer-->
	  <footer id="footer">
	    <div class="top-footer">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-4 col-sm-4 marb20">
	            <div class="ftr-tle">
	              <h4 class="white no-padding">About Us</h4>
	            </div>
	            <div class="info-sec">
	              <p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
	            </div>
	          </div>
	          <div class="col-md-4 col-sm-4 marb20">
	            <div class="ftr-tle">
	              <h4 class="white no-padding">Quick Links</h4>
	            </div>
	            <div class="info-sec">
	              <ul class="quick-info">
	                <li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
	                <li><a href="#service"><i class="fa fa-circle"></i>Service</a></li>
	                <li><a href="#contact"><i class="fa fa-circle"></i>Appointment</a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-md-4 col-sm-4 marb20">
	            <div class="ftr-tle">
	              <h4 class="white no-padding">Follow us</h4>
	            </div>
	            <div class="info-sec">
	              <ul class="social-icon">
	                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
	                <li class="bgred"><i class="fa fa-google-plus"></i></li>
	                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
	                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="footer-line">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-12 text-center">
	            © Copyright Medilab Theme. All Rights Reserved
	            <div class="credits">
	              <!--
	                All the links in the footer should remain intact.
	                You can delete the links only if you purchased the pro version.
	                Licensing information: https://bootstrapmade.com/license/
	                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medilab
	              -->
	              Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </footer>
	  <!--/ footer-->

	  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	  <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
	  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	  <script src="<?php echo base_url();?>assets/js/custom.js"></script>
	  <script src="<?php echo base_url();?>assets/contactform/contactform.js"></script>

	</body>

</html>