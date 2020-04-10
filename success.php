<?php if (isset($_POST['reg_user'])){ 
	
    if (count($errors) == 0) {?>
      <div class="success">
    <?php if($select=="Artist"){
    echo "Thank you for your registration, please wait your account getting approved"; }
        else if($select=="Visitor"){
   echo "Thank you for your registration"; } } } ?>   
   </div>
   