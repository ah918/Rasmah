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
if(isset($_FILES['fileToUpload'])) {
 
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
    if ($Newimage)
    $sql = "UPDATE artists SET ProfilePic='$target_file', ArtEmail='$email',Name='$Name',LastName='$lastname',Password='$pass' WHERE Artemail='$email'"; 
  else
    $sql = " UPDATE artists SET ArtEmail='$email', Name='$Name', LastName='$lastname',Password='$pass'  WHERE Artemail='$email'"; 
    
    
    $result1 = mysqli_query($conn,$sql);
 
  

    
   // echo $result1;
    

    header("location:/test/GitHub/Rasmah/settingF.php");   
    
    




?>