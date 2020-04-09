



<?php
session_start();
$connection = mysqli_connect("localhost","root","","raasmah");
{		
    
   
   
         $email=$_POST['email'];
         $password	= $_POST['password'];
        

         
      //admin
      $sql= "SELECT * FROM admin WHERE AEmail='$email' AND password='$password'";
       $query1 = mysqli_query($connection, $sql);
      if(mysqli_num_rows($query1) == 1){
      //  if($row=mysqli_fetch_assoc($query2))
         // $run=mysqli_query($database,$query1);
         // if($row=mysqli_fetch_row($run))
          $_SESSION['email']=$email;
        header("Location: admin.html");
       // $_SESSION['email']=$email;
      }

          $sql="SELECT * FROM artists WHERE ArtEmail='$email' AND password='$password'";
          $query2 = mysqli_query($connection, $sql);
          if(mysqli_num_rows($query2) == 1){
           // if($row=mysqli_fetch_assoc($query2))
            if($row[5] = 'true'){
            $_SESSION['email']=$email;
          header("Location: artHome.html");}
      }

      $sql3="SELECT * FROM visitor WHERE VEmail='$email' AND password='$password'";
		 $query3 = mysqli_query($connection, $sql3);
      if(mysqli_num_rows($query3) == 1){
      //  if($row=mysqli_fetch_assoc($query3))
        $_SESSION['email']=$_POST['email'];
        header("Location: VistorF.html");
        
      }
	  else{
        //$message = "invalid username or password";
          echo'<script> location.replace("Sign in final.php");</script>';
          
		  $error = "Failed Login";
	  } 
	  
    }
    
    ?>