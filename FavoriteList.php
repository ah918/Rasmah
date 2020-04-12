<?php
ob_start();
session_start();
include('Conn.php');
if(($_SESSION['role']!='visitor')){
  echo '<script> window.location="login.php";</script>';
//header("location : login.php");
}
/*$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);*/

//include 'Conn.php';

//echo 'ses '.$_SESSION['role'];

//$_SESSION['email']=$email;
if(!isset($_SESSION['email'])) {
  //mysql_close($connection);  
 header("location : login.php");}




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
		


 
	<script src="https://kit.fontawesome.com/6964ae7319.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>My profile</title>
 
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheetG.css" rel="stylesheet">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script type="text/javascript">
</script>
<style>
  body ,html {
    
    width:%100;
    margin:0px;
    padding:0px;
    overflow-x:hidden;
  }
.OurBar  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

.OurBar  ul li {
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
.content{
  position :relative;
margin-bottom:15 px;


}
.container3  > i {
    opacity: 0;

    color: #fad02c;
    will-change: transform;
    -webkit-transform: scale(.1);
            transform: scale(.1);
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.btn_wrap {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    overflow: hidden;
    cursor: pointer;
    width: 80px;
    height: 37px;
    background-color: #EEEEED;
    border-radius: 80px;
    padding: 0 18px;
    will-change: transform;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}

.btn_wrap:hover {
    /* transition-delay: .4s; */
    -webkit-transform: scale(1.1);
            transform: scale(1.1)
}

.this{
    position: absolute;
    z-index: 99;
    width: 300px;
    height: 72px;
    border-radius: 80px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 20px;
    text-align: center;
    line-height: 70px;
    letter-spacing: 2px;
    color: #EEEEED;
    background-color: #fad02c;
    padding: 0 18px;
    -webkit-transition: all 1.2s ease;
    transition: all 1.2s ease;
}

.container3 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: distribute;
        justify-content: space-around;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    width: 300px;
    height: 64px;
    border-radius: 80px;
}

.container3 i:nth-of-type(1) {
            -webkit-transition-delay: 1.1s;
                    transition-delay: 1.1s;
}

.container3 i:nth-of-type(2) {
            -webkit-transition-delay: .9s;
                    transition-delay: .9s;
}

.container3 i:nth-of-type(3) {
            -webkit-transition-delay: .7s;
                    transition-delay: .7s;
}

.container3 i:nth-of-type(4) {
            -webkit-transition-delay: .4s;
                    transition-delay: .4s;
}

.btn_wrap:hover span {
    -webkit-transition-delay: .25s;
            transition-delay: .25s;
    -webkit-transform: translateX(-280px);
            transform: translateX(-280px)
}

.btn_wrap:hover i {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
}
.container3 a{

color: #fad02c;

}
.display-2{
position:relative;
  left:-90px;
}
</style>
  </head>
  <body>
  <div class="OurBar" >
    <img class="ourLogo" src="img/owrlogo.png" >
    <ul>
    
       <li class=" bfirst" >
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> sign out</a>
                      
                    </li>
      <li class=" bSecoend">
        <a href="FavoriteList.php"><i class="fas fa-star"></i> <u>Favorite list</u></a>
                           
                    </li>
      <li class=" bthird">
        
        <a href="Gallery.php"><i class="fas fa-paint-brush"></i> Gallery</a>
               
                      
                    </li>
      <li class=" bFourth">
        <a href="settingF.php"><i class="fas fa-cog"></i> Edit profile</a>
               
                        </li>
      
       <li class=" bFifth">
        <a href="VistorF.php"><i class="fas fa-home"></i> Home </a>
                           
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
		
			<br><br><br><br>
		<br><br>
	
		<hr class="colorgraph">
      <div class="row my-3">
    
         <div class="col-md-12">
             <div class="col3">
			 <span id="info">
			  <p class="display-2">My Favorite List</p>
			 
			 </span>
			 </div>
         </div>
      </div>
	  <hr class="colorgraph">
      
      
      <!---------------------------------------------------->
	  <div class="wrapper">
    <div class="container" >



        		 <div class="row mt-5 mb-5">
        
      
     <!--end row !--> 
    </div>

	<div class="row mt-5 mb-5">
	</div>
    
    <?php
    #$_SESSION['Email']
$query2 = "SELECT * FROM artwork WHERE ID IN (SELECT ID FROM favoritelist WHERE VEmail ='lolo@gmail.com') ;";
$result2 = mysqli_query($conn,$query2);
$storepicture2 = Array();
$storeTitle2 = Array();
$storeDes2 = Array();
$storelike2 = Array();
$storeComment2 = Array();
$storeNumComm2 = Array();
$storeDislike2 = Array();
$storeID2 = Array();
if($result2){
 
    while($rows2 = mysqli_fetch_array($result2))
{ 
  $storepicture2[] = $rows2['picture']; 
  $storeTitle2[] = $rows2['Title']; 
  $storeDes2[] = $rows2['Description']; 
  $storelike2[] = $rows2['LikeNum']; 
  $storeDislike2[] = $rows2['DislikeNum'];
  $storeComment2[]= $rows2['comment']; 
  #$storeNumComm2[] = $rows2['NumComment']; 
  $storeID2[] = $rows2['ID'];
}
}
else
 echo mysqli_error($conn);

$number2 = count($storeTitle2);

?>
	  <div class="wrapper">
    <div class="container-fluid" >
      <?php 
      define('z', 0);
      
     
        for ( $z=0; $z<count($storeTitle2);$z++) {

        if($z%4==0 && z!=0){
          echo'<div class="row mt-5 mb-5">';}
          ?>
               <!------- ------->

         <div class="col-md-3 text-center">
            <div class="col5">
                <div class="content">
		   
    <a href="#" target="_blank">
      <div class="content-overlay"></div>
      <?php $current2 = $storepicture2[$z]; 
     # echo $current;
     
      ?>
      <img class="content-image" src="<?php echo $current2; ?>">
      <div class="content-details fadeIn-bottom">
        <h3 class="content-title"><?php echo $storeTitle2[$z]; ?></h3>
        <p class="content-text"><?php echo $storeDes2[$z]; ?></p>
		    
<span class="content-text"> 
	<i class="fas fa-heart fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> <?php echo $storelike2[$z]; ?> </p>
</span>
<span class="he"> 
	<i class="fas fa-heart-broken fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> <?php echo $storeDislike2[$z]; ?> </p>
</span>
<?php if ($storeComment2[$z] == 1){ 
echo '<span class="he">
<i class="fas fa-comment fa-1x"></i>
<p  class="num" style=" display: inline;">';
$sql5 = "SELECT COUNT(*) AS total FROM comments WHERE ID='".$storeID2[$z]."';";
$result5 = mysqli_query($conn,$sql5);
if($result5){
  while($rows5 = mysqli_fetch_array($result5))
{
  $storeNumComm2[$z] = $rows5['total']; 
}}
  echo $storeNumComm2[$z];
echo '</p>
</span>';
 } ?>
   </div>
   
    </a>
  </div>
  


  <div class="btn_wrap">
         <span class="this"  > ... </span>
        <div class="container3" >
        
         
            <a  href="deleteFav.php?id= <?php echo $storeID2[$z]; ?>"> <i class="far fa-trash-alt fa-lg"></i></a>
        
        </div>
    </div>

      </div>
       <!-- end of colom !-->
       </div>
       
     <!--end row !--> 
     <?php if($z%4==0 && z!=0){
    echo '</div>';}
     }
    ?>        
    






    
	</div>
	</div>
	  </div>
	   <!--end menu tap !--> 
    </div>


  

	  

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
  
  <footer>
  
  <footer>
  
  <div id="footer">
      <svg viewbox="0 0 100 25">
<path fill="#e0efe3" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
</svg>
  </div>

</footer>
</html>