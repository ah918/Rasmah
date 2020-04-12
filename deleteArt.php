<?php
include 'Conn.php';
$sql2 = "DELETE FROM favoritelist WHERE ID ='".$_GET['id']."';";
// Prepare statement
$stmt2 = $conn->prepare($sql2);

// execute the query
$stmt2->execute();

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
