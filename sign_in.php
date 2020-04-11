
<?php
session_start();
ob_start();
$connection = mysqli_connect("localhost","root","","raasmah");
{		
    
   
   
         $email=$_POST['email'];
         $password	= $_POST['password'];
         $errorMsg = ""; // error messages variable 
        /* if(empty($_POST['email'])||empty($_POST['password'])){ // check 
          $errorMsg = "You must enter email/password"; */
         





      //admin
      $sql= "SELECT * FROM admin WHERE AEmail='$email' AND password='$password'";
       $query1 = mysqli_query($connection, $sql);
       //artist
       
       $sql="SELECT * FROM artists WHERE ArtEmail='$email' AND password='$password'";
       $query2 = mysqli_query($connection, $sql);

       //visitor
       $sql3="SELECT * FROM visitor WHERE VEmail='$email' AND password='$password'";
       $query3 = mysqli_query($connection, $sql3);




      if(mysqli_num_rows($query1) == 1){
      //  if($row=mysqli_fetch_assoc($query2))
         // $run=mysqli_query($database,$query1);
         // if($row=mysqli_fetch_row($run))
          $_SESSION['email']=$email;
          $_SESSION['role']='admin';
        header("Location: adminpast.php");
       // $_SESSION['email']=$email;
            }
 
        elseif(mysqli_num_rows($query2) == 1){
           // if($row=mysqli_fetch_assoc($query2))
            if($row['Approved'] = 'true'){
            $_SESSION['email']=$email;
            $_SESSION['role']='artist';
          header("Location: artHome2.php");}
            
            }

    
      elseif(mysqli_num_rows($query3) == 1){
      //  if($row=mysqli_fetch_assoc($query3))
        $_SESSION['email']=$email;
        $_SESSION['role']='visitor';
        header("Location: VistorF.php");
        
      }
	  else{
        //$message = "invalid username or password";

       /* echo '<script> alert ("Try to enter email and password" );</script>';
        redirect('login.php');*/

          //echo'<script> location.replace("Sign in final.php") alert ("Try to enter email and password" );</script>';
          
         /* echo "<script>
alert('There are no fields to generate a report');
window.location.href='admin/ahm/panel';
</script>";*/


echo "<script type='text/javascript'>alert(\"Wrong email or Password\")</script>";
//header("location:page1.php");
include("login.php");

		  $error = "Failed Login";
	  } 
	  
    
  }
  
    
    ?>