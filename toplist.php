<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!--
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <!-- Site title
   ================================================== -->
  <title>HiFood Login</title>

  <!-- Bootstrap CSS
   ================================================== -->
  <link rel="stylesheet" href="css/newbootstrap.min.css">

  <!-- Animate CSS
   ================================================== -->
  <link rel="stylesheet" href="css/animate.min.css">

  <!-- Font Icons CSS
   ================================================== -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/ionicons.min.css">

  <!-- Main CSS
   ================================================== -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Google web font 
   ================================================== --> 
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

  </head>
		<style>
		body {
              padding-top: 50px;}
              .starter-template {
              padding: 40px 15px;
              text-align: center;}
	    </style>

<?php
  session_start();
  if(!isset($_SESSION["sess_user"])){
          header("location:login.php");
  } else {
  ?>
<body>
  <div class="nav-container">
    <nav class="nav-inner transparent">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">HiFood</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="toplist.php">Top List</a></li>
            <li><a href="one.html">Prepare Me</a></li>
            <li><a href="order.php">Order</a></li>
            <li><a href="direction.php">Direction</a></li>
			      <li><a href="contact.php">Contact Us</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </nav>
    </div>

    <div class="container">
    
        <div class="starter-template">
          <h1>Welcome "<?=$_SESSION['sess_user'];?>"</h1>
          <p class="lead">Let the HiFood find your favorite foods</p>
        </div>

<div class="container">
    <div class="row">
 
      <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" data-wow-delay="1.6s">Top List</h1> 
              <h3 class="wow fadeInUp" data-wow-delay="1.9s">Here are some recommened restaurant for you</h3>
          </div>
      </div>

    </div>
    
  <div class="panel-group iso-section wow fadeInUp" data-wow-delay="2.6s" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Restaurant one</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="iframe-wrap panel-body">
        <iframe width="600" height="450" frameborder="0" style="border:0"
		src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ55du2IwOZ0gRNal_7nS3UW0&destination=place_id:ChIJ-Tf6_IIOZ0gR4WvW49ZFp8I&key=AIzaSyCBX1k36RC7viSEdBefBbhmRWRYr76MDzY" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Restaurant two</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="iframe-wrap panel-body">
        <iframe width="600" height="450" frameborder="0" style="border:0"
		src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ55du2IwOZ0gRNal_7nS3UW0&destination=place_id:ChIJl9gur5sOZ0gRdWFOYPXJi6c&key=AIzaSyCBX1k36RC7viSEdBefBbhmRWRYr76MDzY" allowfullscreen></iframe>
      </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Restaurant three</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="iframe-wrap panel-body">
          <iframe width="600" height="450" frameborder="0" style="border:0"
		  src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ55du2IwOZ0gRNal_7nS3UW0&destination=place_id:ChIJ5UnePYMOZ0gRITeMaR_sf2E&key=AIzaSyCBX1k36RC7viSEdBefBbhmRWRYr76MDzY" allowfullscreen></iframe>
       </div>
      </div>
    </div>
     <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Restaurant four</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="iframe-wrap panel-body">
          <iframe width="600" height="450" frameborder="0" style="border:0"
		  src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ55du2IwOZ0gRNal_7nS3UW0&destination=place_id:ChIJ-Tf6_IIOZ0gR4WvW49ZFp8I&key=AIzaSyBAOZuMVDCpaCDF4xgNmmEhduOEZQiAhCM" allowfullscreen></iframe>
       </div>
      </div>
    </div>
  </div> 
</div>


  </body>
  	   
	
  <footer>
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-sm-12">
        <p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2017 HiFood</p>
          <ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
          <li><a href="http://www.facebook.com/" class="fa fa-facebook"></a></li>
          <li><a href="http://www.twitter.com/" class="fa fa-twitter"></a></li>
          <li><a href="http://www.instagram.com/" class="fa fa-instagram"></a></li>
          <li><a href="https://plus.google.com/" class="fa fa-google-plus"></a></li>
        
        </ul>
      </div>
      
    </div>
  </div>
  </footer>


<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>

  <?php
  }
  ?>