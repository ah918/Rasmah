    <?php

$conn = mysqli_connect('localhost', 'root', '', 'raasmah');

// lets assume a user is logged in with id $user_id
$user_id = 2;

$comment=$_POST["comment"]

           
$sql = "INSERT INTO comment VALUES ($user_id, $comment)";

?>