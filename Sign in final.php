<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="raasmah";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
?>

<html>
<head> 

	<script src="https://kit.fontawesome.com/6964ae7319.js" crossorigin="anonymous"></script>
    
    <!-- "//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" -->
    <link href="css/desset3.css" rel="stylesheet" id="bootstrap-css">
     <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
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

 .ourLogo {
 float: left;
 margin-left : 5%;
}

	#leftPanel{
    background-color:#FAFEB6;
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
.form-group { font-family:cursive;}
.row { font-family:cursive;}
</style>
    
    </head>
<!------ Include the above in your HEAD tag ---------->

    <body>
	
	<div class="OurBar"  >
<img class="ourLogo" src="img/owrlogo.png" >
<ul>

  <!-- <li class=" bfirst" >
                  
                  
                </li>-->
  <!--<li class=" bSecoend">
                  <a href="#"><i class="fas fa-sign-in-alt"></i> sign in</a>
           
                </li>-->
  <li class=" bthird">
                  <a href="Sign Up final.html"><i class="fas fa-user-plus"></i> sign up</a>
                </li>
  <li class=" bFifth">
    <a href="Home.html"><i class="fas fa-home"></i> Home</a>
                    </li>
</ul>
</div>
<div class="container">
<br>
<br>

	<div class="row" id="main">
        
        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
    <div class="col-md-12">
    	<form role="form">
			<h2 style="font-family:cursive; font-size:40pt;">Sign in</h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
          <form role = "form" method="post" action ="sign_in.php">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg"
                         placeholder="Email Address" tabindex="1"  autofocus>
					</div>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
        </div>
</form>
               <p>
			   <div class="form-group">
             <a href ="Forget password (1).html">Forget password?</a></p><!-- URL-->
                </label></p></div>
			</div>
			<hr class="colorgraph">
            
            <div class="row">
				<div class="col-xs-12 col-md-6"></div>
				<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg"  value="sign in" color=#c4e17f >Sign in</a></div>
			</div>
		</form>
	</div>
</div>
<!-- Modal -->

</div>
        </div>
     </div>       

<div id="footer">
           <svg viewbox="0 0 100 25">
  <path fill="#e0efe3" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
</svg>
       </div>


</body>




</html>

<?php
     if (!($database = mysql_connect("localhost","root")))
     die("<p>could not connect to database</p>");

     if(!mysqli_select_db($database,"raasmah"))
     die("<p>Could not open URL database</p>");

     if(isset($_POST['sign in']))
?>