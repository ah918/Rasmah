



<?php
$connection = mysqli_connect("localhost","root","","raasmah");
{		
    
   
   
         $email=$_POST['email'];
         $password	= $_POST['password'];
      
      //admin
       $query1 = mysqli_query($connection, "SELECT * FROM admin WHERE AEmail='$email' AND password='$password'");
      if(mysqli_num_rows($query1) == 1){
        header("Location: admin.html");
      }
          $query2 = mysqli_query($connection, "SELECT * FROM artists WHERE ArtEmail='$email' AND password='$password'");
          if(mysqli_num_rows($query2) == 1){
          header("Location: artHome.html");
      }
		 $query3 = mysqli_query($connection, "SELECT * FROM visitor WHERE VEmail='$email' AND password='$password'");
      if(mysqli_num_rows($query3) == 1){
        header("Location: VistorF.html");
      }
	  else{
		  $error = "Failed Login";
	  } 
	  
    }
    
    ?>