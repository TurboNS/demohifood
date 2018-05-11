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

    <title>HiFood Order</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	
		<style>
		body {
              padding-top: 50px;}
              .starter-template {
              padding: 40px 15px;
              text-align: center;}
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
            <li class="active"><a href="order.php">Order</a></li>
            <li><a href="direction.php">Direction</a></li>
			      <li><a href="contact.php">Contact Us</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		
        <div class="starter-template">
          <h1>HiFood Order</h1>
          <p class="lead">Let HiFood help you fine the best way to order your favorites foods</p>
        </div>
		

  	  <body>
    <form action="" id="foodform" onsubmit="return false;">
    
  
                <label >Starter option</label><br/><br/>
                <label class='radiolabel'><input type="radio"  name="selectedfood" value="Starter1"  onclick="calculateTotal()" />Starter 1 - this is xxxxx (€11)</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedfood" value="Starter2"  onclick="calculateTotal()" />Start 2 - this is xxxxx (€9)</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedfood" value="Starter3" onclick="calculateTotal()" />Starter 3 - this is xxxxx (€10)</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedfood" value="Starter4" onclick="calculateTotal()" />Starter 4 - this is xxxxx (€7)</label><br/>
                <br/>
    
                <label >Main Course option</label><br/><br/>
                <label class='radiolabel'><input type="radio"  name="selectedfood2" value="Main1"  onclick="calculateTotal()" />Main 1 -  this is xxxxx (€20)</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedfood2" value="Main2"  onclick="calculateTotal()" />Main 2 - this is xxxxx (€25)</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedfood2" value="Main3" onclick="calculateTotal()" />Main 3 - this is xxxxx (€35)</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedfood2" value="Main4" onclick="calculateTotal()" />Main 4 - this is xxxxx (€18)</label><br/>
                <br/>

                <select id="pick" name='pick' onchange="calculateTotal()">
                <option value="None">Selection of your optional</option>
                <option value="Option1">Option1(€5)</option>
                <option value="Option2">Option2(€5)</option>
                <option value="Option3">Option3(€7)</option>
                <option value="Option4">Option4(€8)</option>
                <option value="Option5">Option5(€10)</option>
                <option value="Option6">Option6(€5)</option>
                <option value="Option7">Option7(€9)</option>
                <option value="Option8">Option8(€5)</option>
                <option value="Option9">Option9(€5)</option>
                <option value="Option10">Option10(€8)</option>
                <option value="Option11">Option11(€7)</option>
                <option value="Option12">Option12(€12)</option>
                </select>
                <br/><br/>

    <div id="tet"></div>
    </form>
    <script>
        
        var price= new Array();
        price["None"]=0;
        price["Option1"]=5;
        price["Option2"]=5;
        price["Option3"]=7;
        price["Option4"]=8;
        price["Option5"]=10;
        price["Option6"]=5;
        price["Option7"]=9;
        price["Option8"]=5;
        price["Option9"]=5;
        price["Option10"]=8;
        price["Option11"]=7;
        price["Option12"]=12;
        
       var arr=new Array();
       
       arr["Starter1"]=11;
       arr["Starter2"]=9;
       arr["Starter3"]=10;
       arr["Starter4"]=7;
        
       arr["Main1"]=20;
       arr["Main2"]=25;
       arr["Main3"]=35;
       arr["Main4"]=18;

        function calculateTotal1(){
            
            
            var fprice=0;
           
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["foodform"];
    //Get a reference to the select id="filling"
     var selectedPick = theForm.elements["pick"];
    
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
   
   fprice=price[selectedPick.value];
   //alert(fprice);
    return fprice;
          
          
        }
        
        function calculateTotal2(){
            
            var theForm=document.forms["foodform"];
            var element=theForm.elements["selectedfood"];
            var val=0;
            var result=0;
            for(var i=0;i<element.length;i++){
                
            
            if(element[i].checked){
                
                 val=element[i].value;
                
              
              result=arr[element[i].value];
                
            
              break;
            }
            }
            return result;
        }

        function calculateTotal3(){
            
            var theForm=document.forms["foodform"];
            var element=theForm.elements["selectedfood2"];
            var val=0;
            var result=0;
            for(var i=0;i<element.length;i++){
                
            
            if(element[i].checked){
                
                 val=element[i].value;
                
              
              result=arr[element[i].value];
                
            
              break;
            }
            }
            return result;
        }
        
        function calculateTotal(){
            var final=0;
           final= calculateTotal2()+calculateTotal1()+calculateTotal3();
           
       
            
            document.getElementById("tet").innerHTML="Your Toal Order Price is: "+final;  
        }
         
        
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