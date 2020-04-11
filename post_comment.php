<?php
session_start();
ob_start();

include('Conn.php');

if(($_SESSION['role'] !='' || $_SESSION['role']=='visitor')){
 

}
else
{echo '<script> window.location="login.php";</script>';
  die("Redirecting to login.php");
exit(); }
/*$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);*/

//include 'Conn.php';


//$_SESSION['email']=$email;
if(!isset($_SESSION['email'])) {
  //mysql_close($connection);  
 header("location : login.php");
 exit();}




?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "raasmah";



// Create connection
$conn = new mysqli($servername, $username, $password,$db);
$user_id = $_SESSION['email'];
$post_id = $_POST["Areej"];

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
