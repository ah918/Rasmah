<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "rasmah";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


$email=$_GET['id'];
   $sql="UPDATE  artists SET Approved='1' WHERE ArtEmail=LTRIM('".$email."')";
    //$sql="UPDATE  artists SET Approved='1' WHERE ArtEmail='".$email."';";
if ($conn->query($sql) == TRUE) {
    #header("location : Admin.php");
   ?> <script> window.location="Admin.php";</script>;
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    
}
    
			

?>
