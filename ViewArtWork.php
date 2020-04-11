<?php
ob_start();
session_start();
//include('Conn.php');
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
  <title>View Artwork</title>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css'>

  <script src="https://kit.fontawesome.com/6964ae7319.js" crossorigin="anonymous"></script>
</head>
<style>

* {
  box-sizing: border-box;
  
}

#img {
  position: relative;
  top:-20px; 
}

.date {
position: relative;
  display: inline;  
  left: 480px;
  top: 60px;
}


input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}
input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete {
  position: relative;
  display: inline;
  
}


input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 80%;
}

input[type=submit] {
  background-color: #fad02c;
  color: #fff;
  cursor: pointer;
  width: 19%;
}

input[type=button] {
  background-color: #fad02c;
  color: #fff;
  cursor: pointer;
  width: 47.45%;
  float: right;
  margin-right: 114px;
  margin-top: 1%;
}
.thumbnail {
    padding:0px;
}
.panel {
	position:relative;
}
.panel>.panel-heading:after,.panel>.panel-heading:before{
	position:absolute;
	top:11px;left:-16px;
	right:100%;
	width:0;
	height:0;
	display:#009688;
	content:" ";
	border-color:transparent;
	border-style:solid solid outset;
	pointer-events:none;
}
.panel>.panel-heading:after{
	border-width:7px;
	border-right-color:#f7f7f7;
	margin-top:1px;
	margin-left:2px;
}
.panel>.panel-heading:before{
	border-right-color:#ddd;
	border-width:8px;
}



button.like {
  width: 40px;
  height: 40px;
  margin: 0 auto;
  line-heigth: 50px;
  border-radius: 50%;
  color: #88ca5e;
  background-color: 88ca5e;
  border-color: #88ca5e;
  border-width: 1px;
  font-size: 15px;
  position: relative;
  display: inline;  
  left: 6px;
  top: -20px;

  
}

button.dislike {
  

  width: 40px;
  height: 40px;
  margin: 0 auto;
  line-heigth: 50px;
  border-radius: 60%;
  color: #ff5252;
  background-color: 88ca5e;
  border-color: #ff5252;
  border-width: 1px;
  font-size: 15px;
  position: relative;
  display: inline;  
  left: 90px;
  top: 20px;
  
}
.numberLike {
  position: relative;
  display: inline;  
  left: -23px;
  top: 48px;
  
  font-size: 17px;

}
.numberDLike {
  position: relative;
  display: inline;  
  left: 40px;
  top: 49px;
  font-size: 17px;

}
.container{
  font-family:  cursive;
	margin-left: 7%;

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

h4 {

  color: grey;
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
.colorgraph {
  height: 5px;
  width: 90%;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #88ca5e, #88ca5e 12.5%, #669ae1 12.5%, #669ae1 25%, #ff97d5 25%, #ff97d5 37.5%, #dbe254 37.5%, #dbe254 50%, #7cbb00 50%, #7cbb00 62.5%, #db9dbe 62.5%, #db9dbe 75%, #fad02c 75%, #fad02c 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #88ca5e, #88ca5e 12.5%, #669ae1 12.5%, #669ae1 25%, #ff97d5 25%, #ff97d5 37.5%, #dbe254 37.5%, #dbe254 50%, #7cbb00 50%, #7cbb00 62.5%, #db9dbe 62.5%, #db9dbe 75%, #fad02c 75%, #fad02c 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #88ca5e, #88ca5e 12.5%, #669ae1 12.5%, #669ae1 25%, #ff97d5 25%, #ff97d5 37.5%, #dbe254 37.5%, #dbe254 50%, #7cbb00 50%, #7cbb00 62.5%, #db9dbe 62.5%, #db9dbe 75%, #fad02c 75%, #fad02c 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #88ca5e, #88ca5e 12.5%, #669ae1 12.5%, #669ae1 25%, #ff97d5 25%, #ff97d5 37.5%, #dbe254 37.5%, #dbe254 50%, #7cbb00 50%, #7cbb00 62.5%, #db9dbe 62.5%, #db9dbe 75%, #fad02c 75%, #fad02c 87.5%, #62c2e4 87.5%, #62c2e4);
}
.T1{
  text-align: center;
	font-family:  cursive;
}
.pageTitle{
  margin-top: 80px;
}
.atheer {

margin-left:90px;
}

#a15 {
width:555px;

}
#comment {
  background-color:#dbe254;
}

</style>

<body>


	
  
<div class="OurBar" >
    <img class="ourLogo" src="img/owrlogo.png" >
    <ul>
    
       <li class=" bfirst" >
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> sign out</a>
                      
                    </li>
      <li class=" bSecoend">
        <a href="FavoriteList.php"><i class="fas fa-star"></i> Favorite list</a>
                           
                    </li>
      <li class=" bthird">
        
        <a href="Gallery.php"><i class="fas fa-paint-brush"></i> Gallery</a>
               
                      
                    </li>
      <li class=" bFourth">
        <a href="settingF.php"><i class="fas fa-cog"></i> Edit profile</a>
               
                        </li>
      
       <li class=" bFifth">
        <a href="VistorF.php"><i class="fas fa-home"></i> Home</a>
                           
                              </li>
    </ul>
    </div>  
    <div class = "pageTitle">
      <hr class="colorgraph">
      <br>
    <div class ="T1">
      <h1>
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raasmah";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Title FROM artwork  WHERE ID = '1' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<strong> " . $row["Title"]. "</strong>";
    }
} else {
    echo "";
}

mysqli_close($conn);
?>









      </h1> 

    
    <h4>
    by:
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raasmah";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT ArtEmail FROM artwork  WHERE ID = '1' ";
$result = mysqli_query($conn, $sql);
$artistEmail;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $artistEmail =  $row["ArtEmail"];
       
    }
} else {
    
}



$sql = "SELECT FirstName , Lname FROM artists  WHERE ArtEmail ='" .$artistEmail. "'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      
      echo "<strong> " . $row["FirstName"]." " . $row["Lname"]. "</strong>";
    }
} else {
    
}



mysqli_close($conn);
?>
   </h4> 
</div>
   
    <br>
    <hr class="colorgraph">
  </div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-5">
      <h3>Artwork Description</h3>
      <p> 
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raasmah";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT text FROM artwork  WHERE ID = '1' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<strong> " . $row["text"].  "</strong>";
    }
} else {
    echo "";
}

mysqli_close($conn);
?>
    </p>
   

    <h3>Comments</h3> 


            <div class="container">
              
                    <div class="col-sm-5    ">
                        <div class="panel panel-default">
                        
                        <div class="panel-body">
                        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raasmah";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Vemail, comment FROM comment where post_id = '1'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<strong> " . $row["Vemail"]. ": </strong> <br>" . $row["comment"].  "<br> <br>";
    }
} else {
    echo "";
}

mysqli_close($conn);
?>
                        </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                        </div><!-- /col-sm-5 -->
                    </div><!-- /container -->











                    
    </div>
    <div class="col-sm-6 atheer ">
	
      
      
      <p class="date">
      
       <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raasmah";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Date FROM artwork  WHERE ID = '1' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<strong> " . $row["Date"]. "</strong>";
    }
} else {
    echo "";
}

mysqli_close($conn);
?>
      
      
      
      </p>
      
      <p class=numberLike> 
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raasmah";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT LikeNum FROM artwork  WHERE ID = '1' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<strong> " . $row["LikeNum"]. "</strong>";
    }
} else {
    echo "";
}

mysqli_close($conn);
?>



      </p>
      <p class=numberDLike> 

      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raasmah";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT DislikeNum , comment  FROM artwork  WHERE ID = '1' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $commentE = $row["comment"];
        echo "<strong> " . $row["DislikeNum"]. "</strong>";
    }
} else {
    echo "";
}

mysqli_close($conn);
?>











      </p>
      <form action="dislike.php" method="POST">
      <input type="hidden" name= "dis" value="1"> <!-- value should be id of post -->

      <button class="dislike" type="submit" >
        <i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
    </button>
 
    </form>


    <form action="like.php" method="POST">
      <input type="hidden" name= "dis" value="1"> <!-- value should be id of post -->

    <button class="like" type="submit">
        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
        </form>
    </button>
<!-- image -->
    

      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raasmah";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT picture FROM artwork  WHERE ID = '1' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $img = $row["picture"];
       // echo "<strong> " . $row["DislikeNum"]. "</strong>";
    }
} else {
 //   echo "";
}

?>



<img src="<?php echo $img; ?>" width="100%" height="500px" id="img">




      <div class= "autocomplete" >
      <?php if ($commentE == 1) 
{ ?>
      <form action="post_comment.php" method="POST">
      
      <input type="text" name="comment"    placeholder="write your comment . ." >
    
    <input type="submit" value="Share!" id="comment">
    </form>
    <?php } ?>
</div>


<form action="addFav.php" method="POST">
  <input type="hidden" name= "Areej" value="1"> <!-- value should be id of post -->
  
<input id="a15" type="submit" value="Add to Favorite List!">
</form>
    </div>
	

    


       
</div>
</div>
<footer id="sticky-footer" style="width: 100%;"><svg viewbox="0 0 100 25">
  <path fill="#e0efe3" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
  </svg>
  </footer>



</body>
</html>
