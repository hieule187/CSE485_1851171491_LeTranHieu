<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách hồ sơ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="danhsach.php">Danh sách hồ sơ sinh viên</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Trang chủ<span class="sr-only">(current)</span></a>
                </li>              
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tùy chọn</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="input-group">
					<span class="input-group-text">Tìm kiếm</span>
					<input type="text" name="search_text" id="search_text" placeholder="Nhập từ cần tìm..." class="form-control" />
				</div>
            </form>
        </div>
    </nav>
    <div class="container">
    <table class="table table-striped">
        <thead>
    <div class="card">
        <div class="card-header">
        <h3 class="text-center">Hồ sơ sinh viên</h3>   
        <a href="hoso.php" class="btn btn-success"><i class="fas fa-plus"></i> Thêm mới</a>
        </div> 
            <tr>
                <th>Mã</th>
                <th>Họ tên</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Quê quán</th>
                <th>Số CMND/CCCD</th>
                <th>Dân tộc</th> 
                <th>T.T Chi tiết</th>   
                <th>Chỉnh sửa</th>
                <th>Xóa</th>  
            </tr>
    </div>
        </thead>
    </div>
    <?php
        require 'config/db.php';
        $sql = "SELECT * FROM ttusers";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){      
    ?>           
            <tr>
                <td scope="row"><?php echo $row['id']; ?></td>
                <td><?php echo $row['hoten']; ?></td>
                <td><?php echo $row['ngaysinh']; ?></td>
                <td><?php echo $row['gioitinh']; ?></td>
                <td><?php echo $row['noisinh']; ?></td>
                <td><?php echo $row['cmnd']; ?></td>
                <td><?php echo $row['dantoc']; ?></td>
                <td><a href="chitiet.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Xem thêm</a></td>
                <td><a href="sua.php?id=<?php echo $row['id'];?>" class="btn btn-info">Chỉnh sửa</a></td>
                <td><a onclick="return Del()" href="xoa.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Xóa</a></td>
            </tr>
    <?php } ?>            
            
    </table>
</body>
</html>

<script>
    function Del() {
        return confirm("Bạn có chắc chắn muốn xóa không? (Tất cả thông tin sẽ bị xóa hết)");
    }
</script>

<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"getusers.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
	});
});
</script>