<?php
session_start();
if(isset($_SWSSION['email'])){
  header("location : Sign_in_final");

  exit();
}

?>








<html>
<head> 
   
    <!-- "//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" -->
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/6964ae7319.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/desset3.css" rel="stylesheet" id="bootstrap-css">
     <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>!-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">

    .footer {
    left: 0;
    bottom: 0;
    width: 100%;
    padding: 0.5%;
    background-color: #f1f1f1;
    color: #5c5c5c;
    text-align: center;
    font-size: x-small;
  }
    #leftPanel{
    background-color:white;
    color:#fff;
    text-align: center;
}

#rightPanel{
    min-height:415px;

}


/* Credit to bootsnipp.com for the css for the color graph */
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #88ca5e, #88ca5e 12.5%, #669ae1 12.5%, #669ae1 25%, #ff97d5 25%, #ff97d5 37.5%, #dbe254 37.5%, #dbe254 50%, #7cbb00 50%, #7cbb00 62.5%, #db9dbe 62.5%, #db9dbe 75%, #fad02c 75%, #fad02c 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #88ca5e, #88ca5e 12.5%, #669ae1 12.5%, #669ae1 25%, #ff97d5 25%, #ff97d5 37.5%, #dbe254 37.5%, #dbe254 50%, #7cbb00 50%, #7cbb00 62.5%, #db9dbe 62.5%, #db9dbe 75%, #fad02c 75%, #fad02c 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #88ca5e, #88ca5e 12.5%, #669ae1 12.5%, #669ae1 25%, #ff97d5 25%, #ff97d5 37.5%, #dbe254 37.5%, #dbe254 50%, #7cbb00 50%, #7cbb00 62.5%, #db9dbe 62.5%, #db9dbe 75%, #fad02c 75%, #fad02c 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #88ca5e, #88ca5e 12.5%, #669ae1 12.5%, #669ae1 25%, #ff97d5 25%, #ff97d5 37.5%, #dbe254 37.5%, #dbe254 50%, #7cbb00 50%, #7cbb00 62.5%, #db9dbe 62.5%, #db9dbe 75%, #fad02c 75%, #fad02c 87.5%, #62c2e4 87.5%, #62c2e4);
}
.footer {
    left: 0;
    bottom: 0;
    width: 100%;
    padding: 0.5%;
    background-color: #f1f1f1;
    color: #5c5c5c;
    text-align: center;
    font-size: x-small;
  }
.w3-bar-item { font-family:cursive;}
.span{ font-family:cursive;}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: right;
}

.OurBar  li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.OurBar  li > a {
  float: none;
  padding: 30px 15px 30px;
  color: white;
  text-decoration: none;
  text-shadow: none;
  font-family: cursive;
}

.OurBar  li:hover > a {
	padding-right:30px;
	-webkit-transition: all 0.2s ease;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	-ms-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
  font-family: cursive;
}
.active {
  background-color: #4CAF50;
}
.bfirst > a,
 .bfirst > a:hover,
.bfirst > a:focus{
background-color : #db9dbe;
color:#fff;

}
.bSecoend > a,
 .bSecoend > a:hover,
.bSecoend > a:focus{
background-color : #fad02c;
color:#fff;

}
.bthird > a,
 .bthird > a:hover,
.bthird > a:focus{

background-color : #ff97d5;
color:#fff;
}
.bFourth > a,
 .bFourth > a:hover,
.bFourth > a:focus{
background-color :  #dce253;   
color:#fff;

}
	
	.bFifth > a,
.bFifth > a:hover,
.bFifth > a:focus{
background-color :#88ca5e;
	color:#fff;}
.bfirst > a,
.bfirst > a:hover,
.bfirst > a:focus {
	background-image: url(../img/icons/add.png);
	background-position: center 15px;
	background-repeat: no-repeat;
	-webkit-transition: all 0.2s ease;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	-ms-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
	color:#fff;
}
 .ourLogo {
 float: left;

}
.jumbotron{
  background-color: white;
}
</style>
    </head>
<!------ Include the above in your HEAD tag ---------->
<body>
        <div class="OurBar" >
<img class="ourLogo" src="img/owrlogo.png" >
<ul>

   <li class=" bfirst" >
    <a href="Home.html"><i class="fas fa-sign-out-alt"></i> sign out</a>
                  
                  
                </li>
 <!-- <li class=" bSecoend">
    <a href="#"><i class="far fa-address-card"></i> about us</a>-->
                       
                </li>
  <li class=" bFourth">
	  <a href="edit.html"><i class="fas fa-cog"></i> Setting</a>

           
                  
                </li>
  <li class=" bFifth">
    <a href="Home.html"><i class="fas fa-home"></i> Home</a>
         
                    </li>
</ul>
</div>
<div class="jumbotron text-center">
	<hr class="colorgraph">
	<br>
  <h1 style="font-family:cursive;">Admin Page</h1>
  <br>
  	<hr class="colorgraph">
</div>
<div class="w3-container">


  <h2 style="font-family:cursive;">Pending Accounts:</h2>
  
            
            <div class="row">
				<div class="col-xs-12 col-md-6"></div>
				</div>
  <ul class="w3-ul w3-card-4">
    <li class="w3-bar">
	        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right"><img src="img/button.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:60px"></span>
			      <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right"><img src="img/x button.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:60px"></span>
      <img src="img/imggg.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Raghad</span><br>
        <span>Artist</span>
      </div>
    </li>

    <li class="w3-bar">
      <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right"><img src="img/button.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:60px"></span>
	        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right"><img src="img/x button.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:60px"></span>


      <img src="img/images (20).jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Areej</span><br>
        <span>Artist</span>
      </div>
    </li>

    <li class="w3-bar">
	        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right"><img src="img/button.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:60px"></span>
			      <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right"><img src="img/x button.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:60px"></span>

      <img src="img/uu.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Fahad</span><br>
        <span>Artist</span>
      </div>
    </li>
	 <li class="w3-bar">
	        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right"><img src="img/button.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:60px"></span>
			      <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right"><img src="img/x button.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:60px"></span>

      <img src="img/images (21).jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">May</span><br>
        <span>Artist</span>
      </div>
    </li>
	 <li class="w3-bar">
	        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right"><img src="img/button.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:60px"></span>
			      <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right"><img src="img/x button.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:60px"></span>

      <img src="img/imgggg.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Atheer</span><br>
        <span>Artist</span>
      </div>
    </li>
	 <li class="w3-bar">
	        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right"><img src="img/button.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:60px"></span>
			      <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right"><img src="img/x button.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:60px"></span>

      <img src="img/imggggg.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Faisal</span><br>
        <span>Artist</span>
      </div>
    </li>
	 <li class="w3-bar">
	        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right"><img src="img/button.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:60px"></span>
			      <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right"><img src="img/x button.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:60px"></span>

      <img src="img/images (23).jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Khaled</span><br>
        <span>Artist</span>
      </div>
    </li>

  </ul>
	<hr class="colorgraph">
            
            <div class="row">
				<div class="col-xs-12 col-md-6"></div>
</div>
</div>

</body>

<footer>
  
<div id="footer">
           <svg viewbox="0 0 100 25">
  <path fill="#e0efe3" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
</svg>
       </div>
  </footer>

</html>