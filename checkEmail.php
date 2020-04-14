<?php 
include('Conn.php');
$email = $_POST["emailRec"];

  $user_check_query = "SELECT * FROM artists WHERE ArtEmail='$email'";
  $user_check_quer = "SELECT * FROM visitor WHERE VEmail='$email'";
 

  $result = mysqli_query($conn, $user_check_query);
   $resul = mysqli_query($conn, $user_check_quer);
  $user = mysqli_fetch_assoc($result);
    $use = mysqli_fetch_assoc($resul);

  
if (($user||$use)) { // if user exists
    ?>
  <script> alert("Thank you , you will receive an email contain your password"); 
 window.location = "Home.php"</script> 
    <?php
}else{
    ?>
  <script> alert("This email does't exist"); 
  window.location = "Home.php"</script> 
    <?php
 

  }

  ?>
    