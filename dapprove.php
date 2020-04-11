
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "rasmah";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

#echo "Connected Successfully"
$email=$_GET['id'];
$sql="DELETE FROM artists WHERE ArtEmail=LTRIM('".$email."')";

 echo ($sql);
if ($conn->query($sql) == TRUE) {
header("location:Admin.php"); 	 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
			

?>
			