
<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "raasmah";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }

$conn = OpenCon();
#echo "Connected Successfully";

#CloseCon($conn); "SELECT * FROM artists WHERE ArtEmail='$email'";
	

 $sql="DELETE FROM artists WHERE ArtEmail='".$_GET['id']."';";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
			

?>
			