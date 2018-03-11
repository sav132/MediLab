
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
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

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
              <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>assets/img/logo.png" class="img-responsive" ></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="	" ><a href="<?php echo base_url();?>index.php/home/index">Home</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <h1 class="jumbotron" style="background: rgba(13,70,83, 0);color: white;">Diabetes</h1>
            </div>
            <div class="banner-text text-center">
               	<div class="container">
              	<form class="well form-horizontal" action="<?php echo base_url();?>index.php/diabetes/register " method="post"  id="contact_form" style="background: rgba(13,70,83, 0);border:none;">
              	<fieldset>
              	<dir>
              		
              	</dir>
              	<!-- Text input-->
              	<div class="form-group">
              	  <label class="col-md-4 control-label">Age</label>  
              	  <div class="col-md-4 inputGroupContainer">
              	  <div class="input-group">
              	  <span class="input-group-addon"></span>
              	  <input  name="age" placeholder="Age" class="form-control"  type="text">
              	    </div>
              	  </div>
              	</div>

              	<!-- Text input-->

              	<div class="form-group">
              	  <label class="col-md-4 control-label" >Glucose Level</label> 
              	    <div class="col-md-4 inputGroupContainer">
              	    <div class="input-group">
              	  <span class="input-group-addon"></span>
              	  <input name="glucose_lv" placeholder="Glucose Level" class="form-control"  type="text">
              	    </div>
              	  </div>
              	</div>

              	<!-- Text input-->
              	       <div class="form-group">
              	  <label class="col-md-4 control-label">Blood Pressure</label>  
              	    <div class="col-md-4 inputGroupContainer">
              	    <div class="input-group">
              	        <span class="input-group-addon"></span>
              	  <input name="blood_pressure" placeholder="Blood Pressure" class="form-control"  type="text">
              	    </div>
              	  </div>
              	</div>


              	<!-- Text input-->
              	       
              	<div class="form-group">
              	  <label class="col-md-4 control-label">Skin Thickness</label>  
              	    <div class="col-md-4 inputGroupContainer">
              	    <div class="input-group">
              	        <span class="input-group-addon"></span>
              	  <input name="skin_thickness" placeholder="Skin Thickness" class="form-control" type="text">
              	    </div>
              	  </div>
              	</div>

              	<!-- Text input-->
              	      
              	<div class="form-group">
              	  <label class="col-md-4 control-label">Insulin</label>  
              	    <div class="col-md-4 inputGroupContainer">
              	    <div class="input-group">
              	        <span class="input-group-addon"></span>
              	  <input name="insulin" placeholder="Insulin" class="form-control" type="text">
              	    </div>
              	  </div>
              	</div>

              	<!-- Text input-->
              	 
              	<div class="form-group">
              	  <label class="col-md-4 control-label">Weight</label>  
              	    <div class="col-md-4 inputGroupContainer">
              	    <div class="input-group">
              	        <span class="input-group-addon"></span>
              	  <input name="weight" placeholder="Weight" class="form-control" type="text">
              	    </div>
              	  </div>
              	</div>

              	<div class="form-group">
              	  <label class="col-md-4 control-label">Height</label>  
              	    <div class="col-md-4 inputGroupContainer">
              	    <div class="input-group">
              	        <span class="input-group-addon"></span>
              	  <input name="height" placeholder="Height" class="form-control" type="text">
              	    </div>
              	  </div>
              	</div>

              	<!-- Text input-->

              	<div class="form-group" id = "label1">
              	  <label class="col-md-4 control-label">Pregnancies</label>  
              	    <div class="col-md-4 inputGroupContainer">
              	    <div class="input-group">
              	        <span class="input-group-addon"></span>
              	  <input name="pregnancy" placeholder="No of Pregnancies" class="form-control"  type="text">
              	    </div>
              	</div>
              	</div>

              	<div class="form-group">
              	  <label class="col-md-4 control-label">Diabetes Pedigree Function</label>  
              	    <div class="col-md-4 inputGroupContainer">
              	    <div class="input-group">
              	        <span class="input-group-addon"></span>
              	  <input name="dpf" placeholder="Diabetes Pedigree Function" class="form-control"  type="text">
              	    </div>
              	</div>
              	</div>

              	<!-- Button -->
              	<div class="form-group">
              	  <label class="col-md-4 control-label"></label>
              	  <div class="col-md-4">
              	    <button type="submit" class="btn btn-warning" >Submit <span class="glyphicon glyphicon-submit"></span></button>
              	  </div>
              	</div>

              	</fieldset>
              	</form>
              	</div>
              	    </div><!-- /.container -->
             
	           
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>
  <script src="<?php echo base_url();?>assets/contactform/contactform.js"></script>

</body>

</html>
