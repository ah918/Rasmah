<?php
include 'Conn.php';
 $sql = "DELETE FROM artwork WHERE ID ='".$_GET['id']."';";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
try {
    // echo a message to say the UPDATE succeeded
    echo $stmt->num_rows() . " records UPDATED successfully";
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

 $conn = null;
			
header("location:/test/GitHub/Rasmah/artHome2.php"); 	 

?>
