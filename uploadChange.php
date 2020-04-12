<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "rasmah";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


$id = $_POST['id'];
$sql = "SELECT comment FROM artwork WHERE ID='".$id."';";
$result1 = mysqli_query($conn,$sql);

if($result1){
    while($rows = mysqli_fetch_array($result1))
{
    $storeComment= $rows['comment']; 

}
    }
    
$Newimage = false;
if (!empty($_FILES['fileToUpload']['name'])) {
    
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false){
        $fileName = $_FILES['fileToUpload']['name'];
        # start upload image
    $target_dir = "img/uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
    $fileDestination ='img/uploads/'.$fileName;
    $target_file = $fileDestination ;
    // Check if image file is a actual image or fake image
chmod($fileTmpName, 0755);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      #  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
} 

    $Newimage = true;}
    
}



#end upload image

$title = $_POST["title"];
$discription = $_POST["discription"];


include 'Conn.php';
#$sql = "UPDATE artwork SET picture='$target_file',Title='$title',Description='discription' WHERE ID='".$_GET['id']."';";
#$sql = "INSERT INTO artwork (picture, Title, Description, Date, ArtEmail) VALUES ('$target_file','$title','$discription','$date','random56565@gmail.com')";
#stored successfully but the date does't store hour try to fix it later

/*if ($conn->query($sql) === TRUE) {
    echo "New update created successfully";
    move_uploaded_file($fileTmpName ,$target_file);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/
if (isset($_POST["commentC"]))
$commentNew = "1"; #return 'Yes' if it checked
else
$commentNew = "0";

if ($storeComment ==1 && $commentNew ==1) {
    if ($Newimage)
{$sql = "UPDATE artwork SET picture='$target_file',Title='$title',Description='$discription' WHERE ID='".$id."';";
    move_uploaded_file($fileTmpName ,$target_file);}
    else
$sql = "UPDATE artwork SET Title='$title',Description='$discription' WHERE ID='".$id."';";
$result1 = mysqli_query($conn,$sql);
}// end there is comment
else if($storeComment ==1 && $commentNew ==0){
  
    if ($Newimage)
    {$sql = "UPDATE artwork SET picture='$target_file',Title='$title',Description='$discription',comment='0' WHERE ID='".$id."';"; 
        move_uploaded_file($fileTmpName ,$target_file);}
        else  $sql = "UPDATE artwork SET Title='$title',Description='$discription',comment='0' WHERE ID='".$id."';"; 
    $result2 = mysqli_query($conn,$sql);
}//end remove comment
else if ($storeComment ==0 && $commentNew ==1){
    if ($Newimage)
    {$sql = "UPDATE artwork SET picture='$target_file',Title='$title',Description='$discription',comment='1' WHERE ID='".$id."';"; 
        move_uploaded_file($fileTmpName ,$target_file); }else
   $sql = "UPDATE artwork SET Title='$title',Description='$discription',comment='1' WHERE ID='".$id."';"; 
    $result2 = mysqli_query($conn,$sql);
}else if ($storeComment ==0 && $commentNew ==0){
    if ($Newimage)
    {$sql = "UPDATE artwork SET picture='$target_file',Title='$title',Description='$discription' WHERE ID='".$id."';"; 
        move_uploaded_file($fileTmpName ,$target_file);}
    else
    $sql = "UPDATE artwork SET Title='$title',Description='$discription' WHERE ID='".$id."';"; 
    $result2 = mysqli_query($conn,$sql); 
}

#echo "<script type='text/javascript'>alert(\"your change has been saved successfully\")</script>";  
?>
<script> alert("your change has been saved successfully"); 
</script>
<script> window.location="artHome2.php";</script>; 
<?php

#header("location:/test/GitHub/Rasmah/artHome2.php"); 
?>
