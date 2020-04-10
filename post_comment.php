<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "raasmah";



// Create connection
$conn = new mysqli($servername, $username, $password,$db);
$user_id = 2;
$post_id = 1; 

/*if (isset($_POST['action'])) {
    $post_id = $_POST['post_id'];
}*/

$comment = $_POST["comment"];
            
$sql = "INSERT INTO comment (Vemail, comment , post_id ) VALUES ($user_id, '$comment' , $post_id )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('Location: http://localhost/comment/ViewArtWork.php');

?>