
<?php
include 'Conn.php';

?>



<html>
<head> 
    
 <script src="https://kit.fontawesome.com/6964ae7319.js" crossorigin="anonymous"></script>
    
    
    
    
    <link href="desset3.css" rel="stylesheet" id="bootstrap-css">
     <script src="https;//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https;//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
    
    
    <style>
        
        
        /*.footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
} */
       /* #footer {
  position:absolute;
   bottom:0;
   width:100%;
        height:60px; }  /* Height of the footer */
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: right;
}

.OurBar  li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.OurBar  li > a {
  float: none;
  padding: 30px 15px 30px;
  color: white;
  text-decoration: none;
  text-shadow: none;
  font-family: cursive;
}

.OurBar  li:hover > a {
	padding-right:30px;
	-webkit-transition: all 0.2s ease;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	-ms-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}
.active {
  background-color: #4CAF50;
}
.bfirst > a,
 .bfirst > a:hover,
.bfirst > a:focus{
background-color : #db9dbe;
color:#fff;

}
.bSecoend > a,
 .bSecoend > a:hover,
.bSecoend > a:focus{
background-color : #fad02c;
color:#fff;

}
.bthird > a,
 .bthird > a:hover,
.bthird > a:focus{

background-color : #ff97d5;
color:#fff;
}
.bFourth > a,
 .bFourth > a:hover,
.bFourth > a:focus{
background-color :  #dce253;   
color:#fff;

}
	
	.bFifth > a,
.bFifth > a:hover,
.bFifth > a:focus{
background-color :#88ca5e;
	color:#fff;}
.bfirst > a,
.bfirst > a:hover,
.bfirst > a:focus {
	background-image: url(../img/icons/add.png);
	background-position: center 15px;
	background-repeat: no-repeat;
	-webkit-transition: all 0.2s ease;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	-ms-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
	color:#fff;
}
 .ourLogo {
 float: left;

}
        
        
        
        
        
.footer {
    left: 0;
    bottom: 0;
    width: 100%;
    padding: 1%;
    background-color: #f1f1f1;
    color: #5c5c5c;
    text-align: center;
    font-size: x-small;
  }
        
        
        .body{
            font-family:  cursive;
        }   
        
   ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: right;
}

.OurBar  li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.OurBar  li > a {
  float: none;
  padding: 30px 15px 30px;
  color: white;
  text-decoration: none;
  text-shadow: none;
}

.OurBar  li:hover > a {
	padding-right:30px;
	-webkit-transition: all 0.2s ease;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	-ms-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}
.bfirst > a,
 .bfirst > a:hover,
.bfirst > a:focus{
background-color : #db9dbe;
color:#fff;

}
.bSecoend > a,
 .bSecoend > a:hover,
.bSecoend > a:focus{
background-color : #fad02c;
color:#fff;

}
.bthird > a,
 .bthird > a:hover,
.bthird > a:focus{

background-color : #ff97d5;
color:#fff;
}
.bFourth > a,
 .bFourth > a:hover,
.bFourth > a:focus{
background-color :  #dce253;   
color:#fff;

}
	
	.bFifth > a,
.bFifth > a:hover,
.bFifth > a:focus{
background-color :#88ca5e;
	color:#fff;}


 .ourLogo {
 float: left;
 margin-left : 5%;
}


 .may{
    font-family:  cursive;
    margin-left : 80%;
    width:90%;
   }     
        
   </style>
    
    </head>
<!------ Include the above in your HEAD tag ---------->

    <body>
        
       <div class="OurBar" >
<img class="ourLogo" src="img/owrlogo.png" >
<ul>

   <li class=" bfirst" >
    <a href="Home.html"><i class="fas fa-sign-out-alt"></i> sign out</a>
                  
                </li>
  <li class=" bSecoend">
    <a href="Gallery.html"><i class="fas fa-paint-brush"></i> Gallery</a>
             
                       
                </li>
 <!-- <li class=" bthird">
	   <a href="#"><i class="far fa-address-card"></i> about us</a>-->

                 
                    </li>
	
  <li class=" bFifth">
    <a href="Home.html"><i class="fas fa-home"></i> Home</a>
           
                    </li>
             
</ul>
</div>
    







        
        
<div class="container">
<br>
<br>
	<div class="row" id="main">
        <div class="col-md-4 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                	<div>
                  <form role="form" method="POST" action ="setphp.php" enctype="multipart/form-data" >
                  <?php
             $query1 = "SELECT * FROM artists WHERE ArtEmail ='Riham@gmail.com';";
                    
               $result1 = mysqli_query($conn,$query1);

             if($result1){
             while($rows = mysqli_fetch_array($result1))
               {
                $img_name = $rows['ProfilePic'];
                $Artist_name = $rows['Name'];
                $Artist_Lastname = $rows['LastName'];
                $Artist_Email = $rows['ArtEmail'];
                $Artist_pass = $rows['Password'];
           
                }
                   }

                   else
                   echo mysqli_error($conn);
                   


               
              
           
              /* $img_name = $rows['ProfilePic'];
               $img_src = "profile photo/" . $img_name ;*/
             ?>
               <img src="<?php echo $img_name; ?>" alt="" width="280px" height = "280px" 
               class="img-circle img">
        
               <div class="form-group">  
                
                
                
                <input type="file" name="fileToUpload" >
          </div>
     
  
                    
        			</div>
        		</div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
    <div class="col-md-12">

   

			<h2>Edit your profile.</h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
          
            <input type="text" name="first_name" id="first_name" class="form-control input-lg" value="<?php echo $Artist_name; ?>">
           
                       
					</div>
        </div>
        

				<div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                    

<input type="text" name="last_name" id="first_name" class="form-control input-lg" value="<?php echo $Artist_Lastname; ?>">



					</div>
				</div>
			</div>
			<div class="form-group">
    


				<input type="text" name="email" id="email" class="form-control input-lg"   value="<?php echo  $Artist_Email; ?>">

    
    
      </div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
          


						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5"  value="<?php echo  $Artist_pass; ?>">
          
         
          
          
          </div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">

            <input type="password" name="password2" id="password" class="form-control input-lg" 
            placeholder="Password" tabindex="5"  value="<?php echo  $Artist_pass; ?>">

        
          </div>
				</div>
			</div>
			<hr class="colorgraph">
            
            <div class="row">
				<div class="col-xs-12 col-md-6"></div>
				<div class="may" ><button type="submit" name="submit" class="btn">Update</button></may>
			</div>
		</form>
	</div>
</div>
<!-- Modal -->

</div>
        </div>
     </div>       

        <!-- green e0efe3-->
       <!--<div class="footer">
    <svg viewbox="0 0 100 25">
  <path fill="#FAFEB6" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
</svg>

    </div>-->
        
        
           <!-- -->
<div id="footer">
           <svg viewbox="0 0 100 25">
  <path fill="#e0efe3" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
</svg>
       </div> 
        
    

</body>




</html>





