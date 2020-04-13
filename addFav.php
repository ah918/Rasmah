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
$db = "rasmah";



// Create connection
$conn = new mysqli($servername, $username, $password,$db);
$PostID = $_POST["Areej"];
$user_id = $_SESSION['email']; 

$sql = "INSERT INTO favoritelist (VEmail, ID ) VALUES ('$user_id', '$PostID')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('Location:FavoriteList.php?id='. $PostID .'');

?>