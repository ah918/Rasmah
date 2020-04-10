<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "raasmah";



// Create connection
$conn = new mysqli($servername, $username, $password,$db);
$PostID = $_POST["Areej"];
$user_id = "may.a.alfahad@gmail.com"; 

$sql = "INSERT INTO favoritelist (VEmail, ID ) VALUES ('$user_id', '$PostID')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('Location: http://localhost/comment/ViewArtWork.php');

?>