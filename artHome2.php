<?php
include 'Conn.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>


<!-- ********************** !-->

  <!-- styles -->

	<script src="https://kit.fontawesome.com/6964ae7319.js" crossorigin="anonymous"></script>



  
  <!-- Bootstrap -->



<!-- ********************** !-->
    <meta charset="utf-8">
	<script src="https://kit.fontawesome.com/6964ae7319.js" crossorigin="anonymous"></script>

  
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>My profile</title>
 
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheet2.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script type="text/javascript">
</script>
<style>
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
background-color : #88ca5e;   
color:#fff;

}

 .ourLogo {
 float: left;
 margin-left : 5%;
}
.arrow{

left:87%
}
.content{
  position :relative;
margin-bottom:15 px;


}
</style>
  </head>
  <body>

  <header>
  
        <div class="OurBar" >
<img class="ourLogo" src="img/owrlogo.png" >
<ul>

   <li class=" bfirst" >
                  <a href="artHome.html"><i class="fas fa-home"></i> Home</a>
                  
                </li>
  <li class=" bSecoend">
             <a href="#"><i class="fas fa-sign-out-alt"></i> sign out</a>
                       
                </li>
  <li class=" bthird">
	  <a href="settingF.html"><i class="fas fa-cog"></i> setting</a>

           
                  
                </li>
  <li class=" bFourth">
             <a href="uploudArt.html"><i class="fas fa-paint-brush"></i> post</a>
                    </li>
</ul>
</div>
  </header>



<div class="wrapper">
    <div class="container-fluid" >
	
	<div class="row" >
	<div class="headerT" >
	
	
	
	
	</div>
	<!-- end of row !-->
	</div>
		<br>
	


		<hr class="colorgraph">
      <div class="row my-3">
         <div class="col-md-3 ">
             <div class="col2">
             <span id="photo">
                <?php
               
            $query1 = "SELECT ProfilePic FROM artists WHERE ArtEmail ='akh9180@gmail.com';";
            $result1 = mysqli_query($conn,$query1);
           
             if($result1){
             while($rows = mysqli_fetch_array($result1))
        {
            $img_name = $rows['ProfilePic'];
            $img_src = "profile photo/" . $img_name ;
        ?>

        
        <img src="<?php echo $img_src; ?>" alt="" width="280px" height = "280px" class="rounded-circle z-depth-3 border border-gray" />
        

        <?php
        }
    }
    else
     echo mysqli_error($conn);
    ?>
            
             
             </span>
			 </div>
         </div>
         <div class="col-md-9">
             <div class="col3">
             <span id="info">
                 <?php
$query1 = "SELECT Name FROM artists WHERE ArtEmail ='akh9180@gmail.com';";
$result1 = mysqli_query($conn,$query1);
if($result1){
    while($rows = mysqli_fetch_array($result1))
{
   $Artist_name = $rows['Name'];
?>
              <p class="display-2"><?php echo $Artist_name; ?></p>

              <?php
}
}
              ?>
              <?php
$query1 = "SELECT COUNT(ArtEmail) As Num  FROM artwork WHERE ArtEmail ='akh9180@gmail.com';";
$result1 = mysqli_query($conn,$query1);
if($result1){
    while($rows = mysqli_fetch_array($result1))
{
   $NumPost = $rows['Num'];
?>            
              <p class="font-weight-light"> <strong><?php echo $NumPost; ?></strong> posts</p>
              <?php
}
}
              ?>
			     <?php
$query1 = "SELECT COUNT(*) As Fav FROM artwork JOIN favoritelist WHERE artwork.ID = favoritelist.ID AND ArtEmail='akh9180@gmail.com';";
$result1 = mysqli_query($conn,$query1);
if($result1){
    while($rows = mysqli_fetch_array($result1))
{
   $NumPostFav = $rows['Fav'];
?>            
              <p class="font-weight-light"> <strong><?php echo $NumPostFav; ?></strong> favorite</p>
              <?php
}
}
else
     echo mysqli_error($conn);
              ?>
			 
			 </span>
			 </div>
         </div>
      </div>


	  <hr class="colorgraph">
	  
<div class="container">


  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">My drawing</a></li>
    <li><a data-toggle="tab" href="#menu1">Popular Art</a></li>

  </ul>

 <?php
$query1 = "SELECT * FROM artwork  WHERE ArtEmail='akh9180@gmail.com';";
$result1 = mysqli_query($conn,$query1);
$storepicture = Array();
$storeTitle = Array();
$storeDes = Array();
$storelike = Array();
$storeComment = Array();
$storeNumComm = Array();
$storeDislike = Array();
$storeID = Array();
if($result1){
    while($rows = mysqli_fetch_array($result1))
{
  $storepicture[] = $rows['picture']; 
  $storeTitle[] = $rows['Title']; 
  $storeDes[] = $rows['Description']; 
  $storelike[] = $rows['LikeNum']; 
  $storeDislike[] = $rows['DislikeNum'];
  $storeComment[]= $rows['comment']; 
  $storeNumComm[] = $rows['NumComment']; 
  $storeID[] = $rows['ID'];
}
}

$number = count($storeTitle);
?>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    
	  <div class="wrapper">
    <div class="container-fluid" >
      <?php 
      define('i', 0);
        for ( $i=0; $i<$number ;$i++) {
          
        if($i%3==0 && i!=0){
          echo'<div class="row mt-5 mb-5">';}
          ?>
               <!------- ------->

         <div class="col-md-4 text-center">
            <div class="col5">
                <div class="content">
		   
    <a href="#" target="_blank">
      <div class="content-overlay"></div>
      <?php $current = $storepicture[$i]; 
      echo $current;?>
      <img class="content-image" src="<?php echo $current; ?>">
      <div class="content-details fadeIn-bottom">
        <h3 class="content-title"><?php echo $storeTitle[$i]; ?></h3>
        <p class="content-text"><?php echo $storeDes[$i]; ?></p>
		    
<span class="content-text"> 
	<i class="fas fa-heart fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> <?php echo $storelike[$i]; ?> </p>
</span>
<span class="he"> 
	<i class="fas fa-heart-broken fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> <?php echo $storeDislike[$i]; ?> </p>
</span>
<?php if ($storeComment[i]==1){ ?>
<span class="he">
<i class="fas fa-comment fa-1x"></i>
<p  class="num" style=" display: inline;"> <?php echo $storeNumComm[$i]; ?></p>
</span>
<?php } ?>
   </div>
   
    </a>
	</div>
      </div>
       <!-- end of colom !-->
       </div>
       
     <!--end row !--> 
     <?php if($i%3==0 && i!=0){
    echo '</div>';}
     }
    ?>













	<div class="row mt-5 mb-5">
	</div>
    
            		 <div class="row mt-5 mb-5">
         <div class="col-md-4 text-center">
            <div class="col5">
                <div class="content">
		   
    <a href="#" target="_blank">
      <div class="content-overlay"></div>
      <img class="content-image" src="img/max4_300x300.jpg">
      <div class="content-details fadeIn-bottom">
        <h3 class="content-title">Title</h3>
        <p class="content-text">This is a short description</p>
		    
<span class="content-text"> 
	<i class="fas fa-heart fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 10 </p>
</span>
<span class="he"> 
	<i class="fas fa-heart-broken fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 13 </p>
</span>
<span class="he">
<i class="fas fa-comment fa-1x"></i>
<p  class="num" style=" display: inline;"> 15 </p>
</span>
   </div>
   
    </a>
	</div>
      </div>
       <!-- end of colom !-->
       </div>
       
        <div class="col-md-4 text-center">
            <div class="col5">
        		 <div class="content">
		   
    <a href="#" target="_blank">
      <div class="content-overlay"></div>
      <img class="content-image" src="img/max5_1_300x300.jpg">
      <div class="content-details fadeIn-bottom">
        <h3 class="content-title">Title</h3>
        <p class="content-text">This is a short description</p>
		    
<span class="content-text"> 
	<i class="fas fa-heart fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 10 </p>
</span>
<span class="he"> 
	<i class="fas fa-heart-broken fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 13 </p>
</span>
<span class="he">
<i class="fas fa-comment fa-1x"></i>
<p  class="num" style=" display: inline;"> 15 </p>
</span>
   </div>
    </a>
	</div>
    </div>
    <!-- end of colom !-->
    </div>
    
            <div class="col-md-4 text-center">
            <div class="col5">
        		 <div class="content">
		   
    <a href="#" target="_blank">
      <div class="content-overlay"></div>
      <img class="content-image" src="img/max6_300x300.jpg">
      <div class="content-details fadeIn-bottom">
        <h3 class="content-title">Title</h3>
        <p class="content-text">This is a short description</p>
		    
<span class="content-text"> 
	<i class="fas fa-heart fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 10 </p>
</span>
<span class="he"> 
	<i class="fas fa-heart-broken fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 13 </p>
</span>
<span class="he">
<i class="fas fa-comment fa-1x"></i>
<p  class="num" style=" display: inline;"> 15 </p>
</span>
   </div>
    </a>
	</div>
    </div>
    <!-- end of colom !-->
    </div>
   
      
     <!--end row !--> 
    </div>
     <div class="row">
	 <div class="col-md-12 arrow" >
	 <br>
	 <a href="myDrawing.html" >
	more<i class="fas fa-angle-double-right"></i>
	</a>
	</div>
	</div>
	
	</div>
	
	</div>
     <!--end home tap !--> 
    </div>
    <div id="menu1" class="tab-pane fade">

	  	  <div class="wrapper">
    <div class="container-fluid" >
        		 <div class="row mt-5 mb-5">
         <div class="col-md-4 text-center">
            <div class="col5">
                <div class="content">
		   
    <a href="#" target="_blank">
      <div class="content-overlay"></div>
      <img class="content-image" src="img/Easy1_300x300.jpg">
      <div class="content-details fadeIn-bottom">
        <h3 class="content-title">Title</h3>
        <p class="content-text">This is a short description</p>
		    
<span class="content-text"> 
	<i class="fas fa-heart fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 10 </p>
</span>
<span class="he"> 
	<i class="fas fa-heart-broken fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 13 </p>
</span>
<span class="he">
<i class="fas fa-comment fa-1x"></i>
<p  class="num" style=" display: inline;"> 15 </p>
</span>
   </div>
   
    </a>
	</div>
      </div>
       <!-- end of colom !-->
       </div>
       
        <div class="col-md-4 text-center">
            <div class="col5">
        		 <div class="content">
		   
    <a href="#" target="_blank">
      <div class="content-overlay"></div>
      <img class="content-image" src="img/Easy3_300x300.jpg">
      <div class="content-details fadeIn-bottom">
        <h3 class="content-title">Title</h3>
        <p class="content-text">This is a short description</p>
		    
<span class="content-text"> 
	<i class="fas fa-heart fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 10 </p>
</span>
<span class="he"> 
	<i class="fas fa-heart-broken fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 13 </p>
</span>
<span class="he">
<i class="fas fa-comment fa-1x"></i>
<p  class="num" style=" display: inline;"> 15 </p>
</span>
   </div>
    </a>
	</div>
    </div>
    <!-- end of colom !-->
    </div>
    
            <div class="col-md-4 text-center">
            <div class="col5">
        		 <div class="content">
		   
    <a href="#" target="_blank">
      <div class="content-overlay"></div>
      <img class="content-image" src="img/Easy4_300x300.jpg">
      <div class="content-details fadeIn-bottom">
        <h3 class="content-title">Title</h3>
        <p class="content-text">This is a short description</p>
		    
<span class="content-text"> 
	<i class="fas fa-heart fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 10 </p>
</span>
<span class="he"> 
	<i class="fas fa-heart-broken fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 13 </p>
</span>
<span class="he">
<i class="fas fa-comment fa-1x"></i>
<p  class="num" style=" display: inline;"> 15 </p>
</span>
   </div>
    </a>
	</div>
    </div>
    <!-- end of colom !-->
    </div>
   
      
     <!--end row !--> 
    </div>
    
	<div  class="row mt-5 mb-5">
	</div>
            		 <div class="row mt-5 mb-5">
         <div class="col-md-4 text-center">
            <div class="col5">
                <div class="content">
		   
    <a href="#" target="_blank">
      <div class="content-overlay"></div>
      <img class="content-image" src="img/Easy5_300x300.jpg">
      <div class="content-details fadeIn-bottom">
        <h3 class="content-title">Title</h3>
        <p class="content-text">This is a short description</p>
		    
<span class="content-text"> 
	<i class="fas fa-heart fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 10 </p>
</span>
<span class="he"> 
	<i class="fas fa-heart-broken fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 13 </p>
</span>
<span class="he">
<i class="fas fa-comment fa-1x"></i>
<p  class="num" style=" display: inline;"> 15 </p>
</span>
   </div>
   
    </a>
	</div>
      </div>
       <!-- end of colom !-->
       </div>
       
        <div class="col-md-4 text-center">
            <div class="col5">
        		 <div class="content">
		   
    <a href="#" target="_blank">
      <div class="content-overlay"></div>
      <img class="content-image" src="img/Easy6_300x300.jpg">
      <div class="content-details fadeIn-bottom">
        <h3 class="content-title">Title</h3>
        <p class="content-text">This is a short description</p>
		    
<span class="content-text"> 
	<i class="fas fa-heart fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 10 </p>
</span>
<span class="he"> 
	<i class="fas fa-heart-broken fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 13 </p>
</span>
<span class="he">
<i class="fas fa-comment fa-1x"></i>
<p  class="num" style=" display: inline;"> 15 </p>
</span>
   </div>
    </a>
	</div>
    </div>
    <!-- end of colom !-->
    </div>
    
            <div class="col-md-4 text-center">
            <div class="col5">
        		 <div class="content">
		   
    <a href="#" target="_blank">
      <div class="content-overlay"></div>
      <img class="content-image" src="img/Easy8_300x300.jpg">
      <div class="content-details fadeIn-bottom">
        <h3 class="content-title">Title</h3>
        <p class="content-text">This is a short description</p>
		    
<span class="content-text"> 
	<i class="fas fa-heart fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 10 </p>
</span>
<span class="he"> 
	<i class="fas fa-heart-broken fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> 13 </p>
</span>
<span class="he">
<i class="fas fa-comment fa-1x"></i>
<p  class="num" style=" display: inline;"> 15 </p>
</span>
   </div>
    </a>
	</div>
    </div>
    <!-- end of colom !-->
    </div>
   
      
     <!--end row !--> 
    </div>
    
	</div>
	</div>
	  
	   <!--end menu tap !--> 
    </div>


  </div>
</div>

	  


	
        </div>
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