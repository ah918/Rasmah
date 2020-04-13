<?php
session_start();

// initializing variables
$first_name = "";
$last_name="";
$email= "";
$Age="";
$select="";
$errors = array(); 

// connect to the database
$conn=OpenCon();

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
	

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
  $last_name=mysqli_real_escape_string($conn, $_POST['last_name']);
  $Age=mysqli_real_escape_string($conn, $_POST['Age']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
  $select = mysqli_real_escape_string($conn, $_POST['select']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { array_push($errors, "first name is required"); }
  if (empty($last_name)) { array_push($errors, "last name is required"); }
  if (empty($Age)) { array_push($errors, "Age is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($select)) { array_push($errors, "Please Select Visiot or Artist"); }

  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM artists WHERE ArtEmail='$email'";
  $user_check_quer = "SELECT * FROM visitor WHERE VEmail='$email'";

  $result = mysqli_query($conn, $user_check_query);
   $resul = mysqli_query($conn, $user_check_quer);
  $user = mysqli_fetch_assoc($result);
    $use = mysqli_fetch_assoc($resul);

  
if ($user||$use) { // if user exists
if ($user['ArtEmail'] == $email||$use==['VEmail']) {
      array_push($errors, "email already exists");
    }
  }
  if($select=="Artist"){
	  if($Age >= '15')
	  array_push($errors, "you should be younger than 15 years old"); }
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

if($select=="Artist"){
  $sql = " INSERT INTO artists(ArtEmail, Name, LastName, Password, AEmail, Approved, Age) 
  VALUES ('$email','$first_name','$last_name','$password','admin@gmail.com','0','$Age')";}

else {
	  	
$sql = " INSERT INTO visitor ( VEmail, Name, LastName, Password) VALUES ('$email','$first_name','$last_name','$password')";}
  if ($conn->query($sql) === TRUE) {
 
    #echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}