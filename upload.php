<?php
session_start();
ob_start();

$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "rasmah";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
if( $_SESSION['role']=='artist'){
 

}
else
{echo '<script> window.location="login.php";</script>';
  die("Redirecting to login.php");
exit(); }
/*$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);*/

//include 'Conn.php';

#echo 'ses '.$_SESSION['role'];

//$_SESSION['email']=$email;
if(!isset($_SESSION['email'])) {
  //mysql_close($connection);  
 header("location : login.php");
 exit();}


# start upload image
$target_dir = "img/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$fileName = $_FILES['fileToUpload']['name'];
$fileError = $_FILES['fileToUpload']['error'];
$fileSize = $_FILES['fileToUpload']['size'];
$fileTmpName = $_FILES['fileToUpload']['tmp_name'];

$fileExt = explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));
$fileNameNew = uniqid('',true).".".$fileActualExt;
$fileDestination ='img/uploads/'.$fileName;
$target_file = $fileDestination ; #this variable refer to the path and image name , which should be stored in the database

// Check if image file is a actual image or fake image
chmod($fileTmpName, 0755);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        #echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

#end upload image

$title = $_POST["title"];
$discription = $_POST["discription"];
if ($_POST['comment'] == "on")
$comment = "1"; #return 'Yes' if it checked
else
$comment = "0";
date_default_timezone_set("Asia/Riyadh");
$date =  date("Y-m-d  h:i:s") ;
$uplo = false;

include 'Conn.php';
if (empty($_FILES['fileToUpload']['name'])) {
   ?> <script> alert("please upload an image"); 
    
  window.location="uploudArt.php";
  exist();</script> 
    <?php
}

$sql = "INSERT INTO artwork (picture, Title, Description, Date, ArtEmail, comment) VALUES ('$target_file','$title','$discription','$date','".$_SESSION['email']."' , '$comment')";
#stored successfully but the date does't store hour try to fix it later
if ($conn->query($sql) === TRUE) {
 
    #echo "New record created successfully";
    move_uploaded_file($fileTmpName ,$target_file);

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}?>
<script> alert("your uploade has been done successfully"); 
</script>
<script> window.location="artHome2.php";</script>; 

 
