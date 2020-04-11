<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "raasmah";



// Create connection
$conn = new mysqli($servername, $username, $password,$db);
$PostID = $_POST["dis"];



$sql = "UPDATE artwork SET DislikeNum= DislikeNum+ 1 WHERE id=" .$PostID ;

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
header('Location: http://localhost/comment/ViewArtWork.php');

?>