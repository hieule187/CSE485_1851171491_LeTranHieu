<?php
    require('includes/config.php');
    
    $id = $_GET['id'];
    $sql = "DELETE FROM monhoc WHERE id = $id";  
    $query = mysqli_query($connect, $sql);
    
    header('Location:index.php');   
?>