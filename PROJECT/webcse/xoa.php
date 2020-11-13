<?php
    require 'config/db.php';
    
    $id = $_GET['id'];
    $sql = "DELETE FROM ttusers WHERE id = $id";  
    $query = mysqli_query($conn, $sql);
    
    header('Location:danhsach.php');   
?>