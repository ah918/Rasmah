<?php
include 'Conn.php';
 $sql = "DELETE FROM favoritelist WHERE ID ='id';";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->num_rows() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

 $conn = null;
			
header("location:/test/GitHub/Rasmah/FavoriteList.php"); 	 

?>
