<?php    
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'Ch08';
    $port = '3306';
    $conn =  mysqli_connect($host, $user, $pass, $db, $port);
    if(!$conn){
        die('Khong the ket noi');
        exit();
    }
        
    $id = $_GET['id'];
    $sql = "DELETE FROM users where 'User ID' = $id";  
    $query = mysqli_query($conn, $sql);
    if($query){
        header('Location:index.php');
    }
    else{
        echo "Loi roi";
    }
?>