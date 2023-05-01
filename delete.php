<?php
include "connection.php";


$id = $_GET['id'];
$sql = "DELETE FROM `users` WHERE `id`= '$id'";
$result = mysqli_query($conn, $sql);
if($result == true){
    header("Location:index.php?msg= Record deleted successfully");
    } else {
    echo "Error:" .$sql."<br>" .$conn -> error;
    }
?> 