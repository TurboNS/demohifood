<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <meta  name="viewport"content="initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>
    <style>
   
    <title>HiFood Order</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	
		<style>
		body {


        #map-canvas{
            height:100%;
        }
        
        html,body{
            height:500px;
            margin:0;
            padding:0;
        }
	    </style>
  </head>

  <body>

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
            <li><a href="toplist.php">Top List</a></li>
            <li><a href="prepare.php">Prepare Me</a></li>
            <li><a href="order.php">Order</a></li>
            <li class="active"><a href="direction.php">Direction</a></li>
			      <li><a href="contact.php">Contact Us</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		
        <div class="starter-template">
          <h1>HiFood Direction</h1>
          <p class="lead">Lost? Let HiFood help you find the way</p>
        </div>
		

<body>
    
    <div id="map-canvas"></div>

<script>
    var map;
    
  function initialise(location){
      console.log(location);
      var service;
      var currentPosition =new google.maps.LatLng(location.coords.latitude,location.coords.longitude);
      var mapOptions={

          center: new google.maps.LatLng(location.coords.latitude,location.coords.longitude),
          
          zoom:14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      
      map=new google.maps.Map(document.getElementById("map-canvas"),
      mapOptions);
      
      var marker = new google.maps.Marker({
         position:currentPosition,
          map: map
        });
        
       
  }
  
  $(document).ready(function(){
      
      navigator.geolocation.getCurrentPosition(initialise);
  });
    
    
</script>
    
</body>

  	   
	
	<div class="container"> <!--footer-->
		<hr>
	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright 2017 &copy; Hifood ltd </p>
			</div>
		</div>
	</footer>
	</div><!--Footer-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

