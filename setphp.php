<?php
session_start();
ob_start();

$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "rasmah";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

if(($_SESSION['role'] !='' || $_SESSION['role']=='artist' || $_SESSION['role']=='visitor' || $_SESSION['role']=='admin' ) ){
 

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

echo 'ses '.$_SESSION['role'];

//$_SESSION['email']=$email;
if(!isset($_SESSION['email'])) {
  //mysql_close($connection);  
 header("location : login.php");
 exit();}




?>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "rasmah";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


#$id = $_POST['id'];
//$sql = "SELECT  Name FROM artisits WHERE ID='".$id."';";
//$result1 = mysqli_query($conn,$sql);

$uploadOk = 1;
    
$Newimage = false;
if (!empty($_FILES['fileToUpload']['name'])) {
 
    $fileName = $_FILES['fileToUpload']['name'];
    # start upload image
$target_dir = "profile photo/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$fileTmpName = $_FILES['fileToUpload']['tmp_name'];
$fileDestination ='profile photo/'.$fileName;
$target_file = $fileDestination ;
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

$Newimage = true;

}

  
    
    $Name = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $passcon = $_POST["password2"];
    
    include 'Conn.php';
    
    if ($Newimage){
    if ($_SESSION['role']=='artist'){
        $sql = "UPDATE artists SET ProfilePic='$target_file', ArtEmail='$email',Name='$Name',LastName='$lastname',Password='$pass' WHERE Artemail='$email'";} 
  else if ($_SESSION['role']=='visitor'){
    $sql = "UPDATE visitor SET ProfilePic='$target_file', ArtEmail='$email',Name='$Name',LastName='$lastname',Password='$pass' WHERE Artemail='$email'";}
     
} else {
        if ($_SESSION['role']=='artist'){
    $sql = " UPDATE artists SET ArtEmail='$email', Name='$Name', LastName='$lastname',Password='$pass'  WHERE Artemail='$email'"; }
   
    else if ($_SESSION['role']=='visitor'){
        $sql = "UPDATE visitor SET ProfilePic='$target_file', ArtEmail='$email',Name='$Name',LastName='$lastname',Password='$pass' WHERE Artemail='$email'";}
    }
   
    
    $result1 = mysqli_query($conn,$sql);
 
    move_uploaded_file($fileTmpName ,$target_file);

    
   // echo $result1;
    
   if ($_SESSION['role']=='artist')
    header("location:/test/GitHub/Rasmah/artHome2.php");   
    else if ($_SESSION['role']=='visitor')
    header("location:/test/GitHub/Rasmah/VistorF.php"); 




?>