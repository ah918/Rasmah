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
$user_id = $_SESSION['email'];
$post_id = $_POST["Areej"];

/*if (isset($_POST['action'])) {
    $post_id = $_POST['post_id'];
}*/
$sql2 = "SELECT * FROM visitor  WHERE VEmail ='" .$user_id. "'";
$result1 = mysqli_query($conn,$sql2);
if($result1){
while($rows = mysqli_fetch_array($result1)) {
  $Name ="".  $rows["Name"] ." ". $rows["LastName"]."";
} }
else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}
echo  $Name;

$comment = $_POST["comment"];
            
$sql = "INSERT INTO comments (VEmail, content , ID , author ) VALUES ('$user_id', '$comment' , '$post_id' ,'$Name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('Location:ViewArtWork.php?id='. $post_id .'');

?>
