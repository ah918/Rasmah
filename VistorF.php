<?php
//ob_start();
session_start();
include('Conn.php');
/*if(!($_SESSION['role']='visitor')){
header("location : Home.html");
}
/*$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);*/

//include 'Conn.php';



//$_SESSION['email']=$email;
if(!isset($_SESSION['email'])) {
  //mysql_close($connection);  
 header("location : login.php");

  


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
.display-4{color:#669ae1;
        margin-top: -20px;
		margin-top:10%;
		font-family:cursive;
		margin-left:22%;
	
		} 
        .riham2{overflow-x: hidden;}
        
        main{
background-color:;

}
        
        .row my-3{
            overflow-x: hidden
        }
 .container img{
	 width:30%;
	 height:25%;
	 border-radius:10%;
     
    
  }

.container{
	display:flex;
	justify-content: space-around;
    flex-direction: row;
   margin-left:-20px;
}
.width{
  margin-top:5%;
	width:125%;
	margin-left:-10%;
    top: 70%;
}
        
        
        
#center1{
  position: absolute;
  top: 73%;
  left: 29%;
  transform: translate(-50%, -50%);
  font-size: 18px;
  background-color:white;
  padding:0.5% 3%;
  border-radius: 20px;
     font-family:  cursive;
}
        
        
        #center2{
  position: absolute;
  top: 73%;
  left: 51%;
  transform: translate(-50%, -50%);
  font-size: 18px;
  background-color:white;
  padding:0.5% 3%;
  border-radius: 20px;
             font-family:  cursive;
}
        
        
        #center3{
  position: absolute;
  top:  73%;
  left: 58%;
  transform: translate(-50%, -50%);
  font-size: 18px;
  background-color:white;
  padding:0.5% 3%;
  border-radius: 20px;
            font-family:  cursive;
            
}
.center:hover{
	background-color:red;
}
a{
	text-decoration:none;
}
.atheer{
 
	    position:relative;
	top:90%;
	left:13%;
}
.riham{
    position:relative;
	top:90%;
	 left:-5%

}
#photo {
 position:absolute;
	margin-top:80px;
	 left:30%;

}

.col3 {
align:center;

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
      <li class=" bSecoend">
        <a href="FavoriteList"><i class="fas fa-star"></i> Favorite list</a>
                           
                    </li>
      <li class=" bthird">
        
        <a href="Gallery.php"><i class="fas fa-paint-brush"></i> Gallery</a>
               
                      
                    </li>
      <li class=" bFourth">
        <a href="settingF.php"><i class="fas fa-cog"></i> Edit profile</a>
               
                        </li>
      
       <li class=" bFifth">
        <a href="VistorF.php"><i class="fas fa-home"></i> <u>Home</u></a>
                           
                              </li>
    </ul>
    </div>  

<div class="wrapper">
    <div class="container-fluid" >
	
	<div class="row" >
	<div class="headerT" >
	
	
	
	
	</div>
	<!-- end of row !-->
       
	</div>
		 <div class ="riham2">
		<hr class="colorgraph">
      <div class="row my-3">
         <div class="col-md-3 ">
             <div class="col2">
			<span id="photo">
			 <img src="img/iStock_1_280x280.jpg" width="280px" height = "280px" class="rounded-circle z-depth-3 border border-gray"   alt="">
			 </span>
			 </div>
         </div>
         <div class="col-md-9">
             <div class="col3">
			 <span id="info">
                 
                 
			  <p class="display-4">  Welcome Atheer!</p>
			
			 </span>
                 
                 
			 </div>
             <div class="width">
<div class="container">

<img class ="atheer" src="img/childArt4.jpg" alt="">
 <div id ="center1"><a href="Gallery.html">View gallery</a></div>
<!--<img src="childArt3.jpg" alt="">
    <div id="center2"><a href="g.html">View Art work</a></div>-->
    
<img class= "riham "  src= "img/childArt2.jpg" alt="">
    <div id ="center3"><a href="MyFavList.html">View favourite list </a></div>
</div>
</div>


         </div>
      </div>
	  <!--<hr class="colorgraph">-->
       
      <!-- <div class="jumbotron text-center">
  <h1>Vistor Page</h1>
</div>-->

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