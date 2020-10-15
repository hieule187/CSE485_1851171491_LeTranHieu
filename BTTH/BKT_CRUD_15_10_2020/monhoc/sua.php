<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

<?php
    require('includes/config.php'); 

    $id = $_GET['id'];
    $sql_up = "SELECT * FROM monhoc WHERE id = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $ma= $_POST['ma'];
        $name = $_POST['name'];
        $description = $_POST['description'];      

        $sql = "UPDATE monhoc SET ma = '$ma', name = '$name', description = '$description' WHERE id = $id"; 
        $query = mysqli_query($connect, $sql);
        
        header('Location:index.php');                                  
    }
?>

<div class="container">
    <div class="card">  
    <div class="card-header">
        <h1 class="text-center">Sửa Thông Tin Môn Học</h1>
    </div>
    <form class="card-body" method="POST" enctype="multipart/form-data" >   
        <div class="form-group">
            <label><h5>Mã môn</h5></label>
            <input type="text" class="form-control" name="ma" value="<?php echo $row_up['ma']; ?>">        
        </div>

        <div class="form-group">
            <label><h5>Tên môn</h5></label>
            <input type="text" class="form-control" name="name" value="<?php echo $row_up['name']; ?>">        
        </div>
        
        <div class="form-group">
            <label><h5>Mô tả</h5></label>
            <textarea class="form-control" name="description" value="<?php echo $row_up['description']; ?>" rows="4"></textarea>         
        </div>
        
        <button name="sbm" class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Lưu lại</button>
        <a href="index.php" class="btn btn-danger"><i class="fas fa-backspace"></i> Trở về</a>
    </form>   
    </div>  
</div>