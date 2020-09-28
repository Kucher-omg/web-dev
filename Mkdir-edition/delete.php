<?php
    require_once('php/db.php');

    // if(!isset($_GET['id'])){
    //     header("Location:#list-messages");
    // }

    $id=$_GET['id'];

    $sql4 = "DELETE FROM comments WHERE id='" . $id . "' LIMIT 1";
    // echo $sql4;
    if(mysqli_query($conn, $sql4)){
        // echo 'correct';
        header("Location:index.php#list-group");
    }
 
?>