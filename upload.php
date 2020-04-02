<?php

if(isset($_POST['submit'])) {
$File=$_FILES['file'];
#print_r($file)
$fileName = $_FILES['file']['name'];
$fileError = $_FILES['file']['error'];
$fileSize = $_FILES['file']['size'];
$fileTmpName = = $_FILES['file']['tmp_name'];
$fileExt = explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jbg','jpeg','png');
if(in_array($fileActualExt,$allowed)){
if($fileError === 0){
if ($fileSize < 1000000){
$fileNameNew = uniqid('',true).".".$fileActualExt;
$fileDestination ='uploads/'.$fileNameNew;
move_uploaded_file($fileTmpName ,$fileDestination);
header("location:index.php?uploadedsuccess")
} else{
    echo "your file is too big!";
}




} else {
    echo "there was an error uploading your file!"
}







} else{
echo"you cannot upload files of this type!";
}
}