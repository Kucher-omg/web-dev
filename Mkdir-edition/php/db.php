<?php
    $servername = "lab1";
    $username = "root";
    $password = "";
    $dbname = "comments";
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed" . mysqli_connect_error());
        // echo 'Connected!';
?>