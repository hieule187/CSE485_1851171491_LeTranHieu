<?php
    $connect = mysqli_connect('localhost','root','','bkt');
    if(!$connect){
        die('Lỗi! Không thể kết nối');
        exit();
    }
?>