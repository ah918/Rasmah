<?php
include 'Conn.php';

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

</style>
  </head>
  <body>
        <div class="OurBar" >
<img class="ourLogo" src="img/owrlogo.png" >
<ul>

   <li class=" bfirst" >
    <a href="#"><i class="fas fa-sign-out-alt"></i> Sign out</a>
                  
                </li>
  <li class=" bFourth">
    <a href="#"><i class="fas fa-cog"></i> Setting</a>
            
                       
                </li>
  <li class=" bFifth">
    <a href="index.html"><i class="fas fa-home"></i> Home</a>
	  

           
                  
                </li>
 <!-- <li class=" bFourth">
           <a href="#"><i class="far fa-address-card"></i> about us</a>
                    </li>-->
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
			  <p class="display-2">Gallery</p>
			 
			 </span>
			 </div>
         </div>
      </div>
	  <hr class="colorgraph">
      
      
      <!---------------------------------------------------->
	  <div class="wrapper">
    <div class="container-fluid" >



        		 <div class="row mt-5 mb-5">
        
      
     <!--end row !--> 
    </div>

	<div class="row mt-5 mb-5">
	</div>
    
    <?php
$query2 = "SELECT * FROM artwork ORDER BY LikeNum DESC;";
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
  $storeNumComm2[] = $rows2['NumComment']; 
  $storeID2[] = $rows2['ID'];
}
}

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
  echo $storeNumComm2[$z];
echo '</p>
</span>';
 } ?>
   </div>
   
    </a>
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
	  
	   <!--end menu tap !--> 
    </div>


  

	  

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
  
  <footer>
  
  	   <div id="footer">
           <svg viewbox="0 0 100 25">
  <path fill="#e0efe3" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
</svg>
       </div>
  
  </footer>
</html>