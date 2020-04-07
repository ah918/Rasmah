<?php
# start upload image
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$fileName = $_FILES['fileToUpload']['name'];
$fileError = $_FILES['fileToUpload']['error'];
$fileSize = $_FILES['fileToUpload']['size'];
$fileTmpName = $_FILES['fileToUpload']['tmp_name'];

$fileExt = explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));
$fileNameNew = uniqid('',true).".".$fileActualExt;
$fileDestination ='uploads/'.$fileNameNew;
$target_file = $fileDestination ; #this variable refer to the path and image name , which should be stored in the database

// Check if image file is a actual image or fake image
chmod($fileTmpName, 0755);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

#end upload image

$title = $_POST["title"];
$discription = $_POST["discription"];
if ($_POST['comment'] == "on")
$comment = "yes"; #return 'Yes' if it checked
else
$comment = "no";
date_default_timezone_set("Asia/Riyadh");
$date =  date("Y-m-d  h:i:s") ;
echo "Your file name is:  $target_file <br>"; 
echo "Your title is:  $title <br>"; 
echo "Your discription is:  $discription <br>"; 
echo "anable comment ?:  $comment <br>"; 
echo "date is:  $date <br>"; 

include 'Conn.php';
$sql = "INSERT INTO artwork (picture, Title, Description, Date, ArtEmail) VALUES ('$target_file','$title','$discription','$date','akh9180@gmail.com')";
#stored successfully but the date does't store hour try to fix it later
if ($conn->query($sql) === TRUE) {
 
    echo "New record created successfully";
    move_uploaded_file($fileTmpName ,$target_file);

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>