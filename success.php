<?php if (isset($_POST['reg_user'])){ 
	
    if (count($errors) == 0) {?>
      <div class="success">
    <?php if($select=="Artist"){?>
   <script> alert("Thank you for your registration,please wait your account getting approved"); 
   window.location = "http/GitHub/Rasmah/Home.html"</script> <?php }
        else if($select=="Visitor"){?>
   <script> alert("Thank you for your registration,please wait your account getting approved"); 
   window.location = "http/GitHub/Rasmah/Home.html"</script> <?php } } } ?>   
   </div>
   