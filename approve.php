<?php
include 'Conn.php';
$email=$_GET['id'];
    $sql="UPDATE  artists SET Approved='true' WHERE ArtEmail=LTRIM('".$email."')";
if ($conn->query($sql) == TRUE) {
echo "conn";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    $sql="UPDATE  artists SET AEmail='May.a.alfahad@gmail.com' WHERE ArtEmail=LTRIM('".$email."')";
if ($conn->query($sql) == TRUE) {
header("location:/Admin/admin.php"); 	 

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
			

?>
