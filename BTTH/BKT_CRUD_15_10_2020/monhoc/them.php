<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

<?php
    require('includes/config.php'); 

    if(isset($_POST['sbm'])){
        $ma = $_POST['ma'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        
        $sql = "INSERT INTO monhoc (ma, name, description) VALUES ('$ma', '$name', '$description')";
        $query = mysqli_query($connect, $sql);
        
        header('Location:index.php');                                  
    }
?>

<div class="container">
    <div class="card">  
    <div class="card-header">
        <h1 class="text-center">Thêm Môn Học</h1>
    </div>
    <form class="card-body" method="POST" enctype="multipart/form-data" >   
        <div class="form-group">
            <label><h5>Mã môn</h5></label>
            <input type="text" class="form-control" name="ma" value="" required/>        
        </div>

        <div class="form-group">
            <label><h5>Tên môn</h5></label>
            <input type="text" class="form-control" name="name" value="" required/>        
        </div>
        
        <div class="form-group">
            <label><h5>Mô tả</h5></label>
            <textarea class="form-control" name="description" value="" rows="4"></textarea>         
        </div>
        
        <button name="sbm" class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Lưu lại</button>
        <a href="index.php" class="btn btn-danger"><i class="fas fa-backspace"></i> Trở về</a>
    </form>   
    </div>  
</div>