
<?php
include 'Conn.php';
#echo "Connected Successfully"
$email=$_GET['id'];
$sql="DELETE FROM artists WHERE ArtEmail=LTRIM('".$email."')";

 echo ($sql);
if ($conn->query($sql) == TRUE) {
header("location:/Admin/admin.php"); 	 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
			

?>
			