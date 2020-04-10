<?php
include 'Conn.php';
session_start(); ?>

<html lang="en">


<head> 
    
  
    
    <script src="https://kit.fontawesome.com/6964ae7319.js" crossorigin="anonymous"></script>
    
    <!-- "//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" -->
    <link href="descircle.css" rel="stylesheet" id="bootstrap-css">
     <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
    
    
    
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
    
    .footer {
    left: 0;
    bottom: 0;
    width: 100%;
    padding: 1%;
    background-color: #f1f1f1;
    color: #5c5c5c;
    text-align: center;
    font-size: x-small;
  }
    
    
        .riham3{
            margin-top: 15%;
            font-family: cursive;
        }
        
        .jojo{
            display: flex;
            justify-content: space-between;
        }
        #jojo2{
            margin-left: 10px;
        }
        
        #jojo3{
            width:200px;
        }
        .jojo4{
             display: flex;
            justify-content: space-between; 
        }
        
        #jojo5{
            margin-right: 40px;
          padding-top:1%;
			padding-bottom: 1%;
        }
		
		#jojo6{
			          padding-top:5%;
			padding-bottom: 5%;
		}
    </style>
    
    
    </head>
<!------ Include the above in your HEAD tag ---------->

    <body>
        
        <div class="OurBar" >
<img class="ourLogo" src="img/owrlogo.png" >
<ul>

   <li class=" bfirst" >
    <a href="Home.html"><i class="fas fa-sign-out-alt"></i> Sign out</a>
                 
                  
                </li>

              </li>
              <li class=" bthird">
                         <a href="myDrawing.html"><i class="fas fa-paint-brush"></i> My drawing</a>
                                </li>
  <li class=" bFourth">
    <a href="edit.html"><i class="fas fa-cog"></i> Setting</a>
                       
                </li>
  <li class=" bFifth">
    <a href="Home.html"><i class="fas fa-home"></i> Home</a>
	  

           
                  

</ul>
</div>
        
        
<div class="container">
<br>
<br>
	<div class="row" id="main">
       <div class="col-md-4 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                	<div class ="riham3">
                    <form action="Edit.php" method="POST" enctype="multipart/form-data">
                    <?php 
                    $query1 = "SELECT * FROM artwork WHERE ID='".$_GET['id']."';";
                    
                    $result1 = mysqli_query($conn,$query1);
                    
                    if($result1){
                        while($rows = mysqli_fetch_array($result1))
                    {
                      $storepicture = $rows['picture']; 
                      $storeTitle = $rows['Title']; 
                      $storeDes= $rows['Description']; 
                      $storelike = $rows['LikeNum']; 
                      $storeDislike = $rows['DislikeNum'];
                      $storeComment= $rows['comment']; 
                      $storeNumComm = $rows['NumComment']; 
                      $storeID = $rows['ID'];
                    }
                    }
                    else 
                    echo "error";
                    ?>
        			<img src="<?php echo $storepicture; ?>" height="350" width="350" alt="profile " class="img-circle img">
                       
        			
                     <div class="form-group">  
                
                
                
                      <input type="file" name="fileToUpload" >
                </div>
        			</div>
                    
        		</div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
    <div class="col-md-12">
    	
			<h2>Edit Art work </h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <div class ="jojo">
                         
                        <input type="text" name="title" id="jojo3"   class="form-control input-lg" value="<?php echo $storeTitle; ?>" tabindex="1"> 
             	
                       
                        </div>
                </div>
				</div>
                
               
				<!-- <textarea>-->
			</div>
			<div class="form-group">
                <input type="text" name="discription" rows="11" cols="25" id="email" class="form-control input-lg" value="<?php echo $storeDes; ?>" rows="50" cols ="60" tabindex="4">
                <div class = "checkBox">
                  <input type="checkbox" name="comment"/><label> Available comment</label>
                  </div>
			</div>
			
			<hr class="colorgraph">
            
            <div class="row">
				<div class="col-xs-12 col-md-6"></div>
				<div class="col-xs-12 col-md-6">
                    
                   <!-- <div class ="jojo4">-->
                   
                    <button type="submit" name="submit" class="btn btn-success btn-block btn-lg"  >Save changes</button>
						 <a href="#"  class="btn btn-success btn-block btn-lg"  >Cancel</a>
                   <!-- </div>-->
                <br>
                <br>
              </div>
                
                
                
                
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


if(isset($_POST['name'])) {
if(is_uploaded_file($_FILES['files']['tmp_name'][0])){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false){
    $fileName = $_FILES['fileToUpload']['name'];
    # start upload image
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$fileTmpName = $_FILES['fileToUpload']['tmp_name'];
$fileDestination ='uploads/'.$fileName;
$target_file = $fileDestination ; }
}else{
    $fileName = $storepicture;
}


$storeID = $_GET['id'];

// Check if image file is a actual image or fake image
chmod($fileTmpName, 0755);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

include 'Conn.php';
#end upload image

$title = $_POST["title"];
$discription = $_POST["discription"];
if ($_POST['comment'] == "on")
$commentNew = "1"; #return 'Yes' if it checked
else
$commentNew = "0";
if ($storeComment ==1 && $commentNew ==1) {
$sql = "UPDATE artwork SET picture='$target_file',Title='$title',Description='discription' WHERE ID='".$_GET['id']."';";
$result1 = mysqli_query($conn,$sql);
}// end there is comment
else if($storeComment ==1 && $commentNew ==0){
    $sql1 = "DELETE FROM comments WHERE ID='".$_GET['id']."';";
    $result1 = mysqli_query($conn,$sql1);
    $sql = "UPDATE artwork SET picture='$target_file',Title='$title',Description='discription',comment='0' WHERE ID='".$_GET['id']."';"; 
    $result2 = mysqli_query($conn,$sql2);
}//end remove comment
else if ($storeComment ==0 && $commentNew ==1){
    $sql = "UPDATE artwork SET picture='$target_file',Title='$title',Description='discription',comment='1' WHERE ID='".$_GET['id']."';"; 
    $result2 = mysqli_query($conn,$sql);
}else if ($storeComment ==0 && $commentNew ==0){
    $sql = "UPDATE artwork SET picture='$target_file',Title='$title',Description='discription' WHERE ID='".$_GET['id']."';"; 
    $result2 = mysqli_query($conn,$sql); 
}

echo $result2;
echo $result1;

} 
header("location:/test/GitHub/Rasmah/artHome2.php");   
?>




