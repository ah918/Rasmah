<?php include('server.php') ?>

<html>
<html lang="en">
<head> 
    
    <!-- "//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" -->
    <link href="css/desset3.css" rel="stylesheet" id="bootstrap-css">
     <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/6964ae7319.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->

 	  
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheet.css" rel="stylesheet">
    <style type="text/css">
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
    background-color: #f2f0f9;
    color: #f2f0f9;
    text-align: center;
    font-size: x-small;
  }
.row { font-family:cursive;}
<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/6964ae7319.js" crossorigin="anonymous"></script>
<style>
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #ffffff;
}
.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  
}
.btn {
  padding: 30px;
  font-size: 20px;
  color: white;
  background:#228B22;
  border: none;
  border-radius: 30px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: right;
    list-style-type: none;
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
}

.OurBar  li:hover > a {
	padding-right:30px;
	-webkit-transition: all 0.2s ease;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	-ms-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] ,input[type=number],input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}





button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
 
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
  
}

</style>



    
    </head>
<!------ Include the above in your HEAD tag ---------->

    <body>



    <div class="OurBar"  >
<img class="ourLogo" src="img/owrlogo.png" >
<ul>

  <!-- <li class=" bfirst" >
                  
                  
                </li>-->
  <li class=" bSecoend">
                  <a href="login.php"><i class="fas fa-sign-in-alt"></i> <u>Sign in</u></a>
           
                
  <li class=" bthird">
                  <a href="Sign Up final.html"><i class="fas fa-user-plus"></i> <u>Sign up</u></a>
                </li>
  <li class=" bFifth">
    <a href="Home.html"><i class="fas fa-home"></i> Home</a>
                    </li>
</ul>
</div>
	

  <form class="modal-content" action="sign_up.php" method="post">
  <?php include('errors.php'); ?>
  <?php include('success.php'); ?>
	
    <div class="container">
<br>
<br>

	<div class="row" id="main">
        
        <div class="col-md-8 well" id="rightPanel">
           <br><br><br>
		   <div class="row">
    <div class="col-md-12">
    	<form role="form">
			<h2 style="font-family:cursive; font-size:40pt;">Sign up</h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" value="<?php echo $first_name; ?>">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" value="<?php echo $last_name; ?>">
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_1" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_2" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
				<input type="number" name="Age" id="email" class="form-control input-lg" placeholder="Age" tabindex="4" value="<?php echo $Age; ?>">
			</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" value="<?php echo $email; ?>">
			</div>
			</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
				<select name="select" value="<?php echo $select; ?>">
				<option>Artist</option>
				<option>Visitor</option>
				</select>
				</div>
				</div>
			</div>
			<hr class="colorgraph">
            
            <div class="row">
			
				<div class="col-xs-12 col-md-6"></div>
				<div class="col-xs-12 col-md-6">
				<div class ="class="btn btn-success btn-block btn-lg color=#c4e17f">
				  	  <button type="submit" class="btn" name="reg_user">Sign Up</button>

				
			</div>
		</form>
	
			
			
			
		
		<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
	</div>
</div>
<!-- Modal -->

</div>
        </div>
     </div>       



</body>




</html>