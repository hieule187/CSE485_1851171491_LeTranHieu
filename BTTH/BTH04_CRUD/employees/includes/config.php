<?php
    $connect = mysqli_connect('localhost','root','','btth04');
    if(!$connect){
        die('Lỗi! Không thể kết nối');
        exit();
    }
?>