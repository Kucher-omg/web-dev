<?php
    require_once('php/db.php');

    $id=$_GET['id'];
 
    $sql5 = "DELETE FROM requeststore WHERE idstore='" . $id . "' LIMIT 1";
    
    if(mysqli_query($conn, $sql5)){
        
        header("Location:admin.php");
    }
 
?>