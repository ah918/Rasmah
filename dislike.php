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
$PostID = $_POST["dis"];



$sql = "UPDATE artwork SET DislikeNum= DislikeNum+ 1 WHERE ID=" .$PostID ;

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
header('Location:ViewArtWork.php?id='. $PostID .'');

?>