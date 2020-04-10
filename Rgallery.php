<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="raasmah";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	
<!-- Fancybox CSS library -->
<link rel="stylesheet" href="fancybox/jquery.fancybox.css">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Fancybox JS library -->
<script src="fancybox/jquery.fancybox.js"></script>


<script>
    $("[data-fancybox]").fancybox();
    </script>




 
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
.gallery img {
    width: 20%;
    height: auto;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
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
	  



<div class="gallery">
    <?php 
    // Include database configuration file 
    
     
    // Retrieve images from the database 
    $query1 ="SELECT * FROM artwork ";
    $result=mysqli_query($conn,$query1 );
    if($result1->num_rows > 0){
      $rowsn= $result1->num_rows;
    $j=0;
      while ($j < $rowsn){
      $i=0;
      
     
     echo' <div class="row mt-5 mb-5">';

     while($rows = mysqli_fetch_array($result1) && $i <3)
     { 
       
     $img = $rows['picture'];
     echo $img;
     $title = $rows['Title'];
     $desc =$rows['Description'];
     $like = $rows['LikeNum'];
     $dislike = $rows['DislikeNum'];
     $id = $rows['ID'];
     $comment = $rows['comment'];
     $commentNum = 0;
     //سحبت على الكومنت 
     echo '<div class="col-md-4 text-center">
            <div class="col5">
                <div class="content">
		   
    <a href="#" target="_blank">
      <div class="content-overlay"></div>' ?>
      <img class="content-image" src="<?php echo $img; ?>"  />
      <div class="content-details fadeIn-bottom">
        <h3 class="content-title"><?php echo $title; ?></h3>
        <p class="content-text"><?php echo $desc; ?></p>

        <span class="content-text"> 
	<i class="fas fa-heart fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"><?php echo $like; ?> </p>
</span>
<span class="he"> 
	<i class="fas fa-heart-broken fa-1x" aria-hidden="true"></i>
    <p  class="num" style=" display: inline;"> <?php echo $dislike; ?> </p>
</span>
<?php if ($comment ==1) { ?>
<span class="he">
<i class="fas fa-comment fa-1x"></i>
<p  class="num" style=" display: inline;"> <?php echo $commentNum; ?> </p>
</span>
   </div>
<?php } ?>

<?php 

echo '</a>
</div>
    </div>
  
     </div>';
    
     $i=$i+1;
     $j=$j+1;
} #end while col
echo '</div>';
  } #end while row
?>

<?php
} #end if rows not equal zero
?>



    <!--$query = $db->query($sql); 
     

   /* while($row=mysqli_fetch_assoc($result)){
           $ArtistImg='assets/images'.$row["picture"];

          <div class ="raghad">
           <img src ="حذفته عشان يضبط مع كود اثير >"



    }



    if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){ 
            $imageThumbURL = 'images/thumb/'.$row["file_name"]; 
            $imageURL = 'images/'.$row["file_name"]; 
    ?>
    <a href="حذفته عشان يضبط مع كود اثير " data-fancybox="gallery" data-caption=
    "حذفته عشان يضبط " >
			<img src="برضو حذفته " alt="" />
    </a>*/
    -->
    
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