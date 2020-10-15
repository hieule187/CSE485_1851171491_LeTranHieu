<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DS Môn Học</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
<div class="container">
    <table class="table table-striped">
        <thead class="thead-dark">
    <div class="card">
        <div class="card-header">
        <h1 class="text-center">Danh Sách Môn Học</h1>   
        <a href="them.php" class="btn btn-success"><i class="fas fa-plus"></i> Thêm mới</a>
        </div> 
            <tr>
                <th>Sửa</th>
                <th>Xóa</th>               
                <th>Tên môn</th>
                <th>Mô tả</th>                                                                
            </tr>
    </div>
        </thead>
    </div>
    <?php
        require('includes/config.php');
        $sql = "SELECT * FROM monhoc";
        $result = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_assoc($result)){      
    ?>           
            <tr>        
                <td><a href="sua.php?id=<?php echo $row['id'];?>" class="fas fa-edit"></a></td>
                <td><a onclick="return Del()" href="xoa.php?id=<?php echo $row['id'];?>" class="fas fa-trash-alt"></a></td>    
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>                                                                                      
            </tr>
    <?php } ?>            
            
    </table>
</body>
</html>
<script>
    function Del() {
        return confirm("Bạn có chắc chắn muốn xóa mục này không ?");
    }
</script>