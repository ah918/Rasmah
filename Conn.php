<?php


function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "rasmah";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }

$conn = OpenCon();
echo "Connected Successfully";
$sql1 ="INSERT INTO admin(AEmail, password) VALUES ('admin@gmail.com','1234')";

if ($conn->query($sql1) === TRUE) {
    echo "New record Admin created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO artists (ProfilePic, ArtEmail, Name, Password, AEmail, Approved) VALUES ('icon.png','akh9180@gmail.com','Atheer','1234','admin@gmail.com','true')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
CloseCon($conn);
?>