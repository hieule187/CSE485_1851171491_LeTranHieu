<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Thông tin chi tiết</h3>
        </div>
<?php
    require 'config/db.php';
    $id = $_GET['id'];
    $sql_view = "SELECT * FROM ttusers WHERE id = $id";
    $result_view = mysqli_query($conn, $sql_view);
    while($row = mysqli_fetch_assoc($result_view)){ 
?>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Mã :</th>
                    <th><?php echo $row['id']; ?></th>
                </tr>

                <tr>
                    <th>Họ tên :</th>
                    <th><?php echo $row['hoten']; ?></th>
                </tr>

                <tr>
                    <th>Ngày sinh :</th>
                    <th><?php echo $row['ngaysinh']; ?></th>
                </tr>

                <tr>
                    <th>Quê quán :</th>
                    <th><?php echo $row['noisinh']; ?></th>
                </tr>

                <tr>
                    <th>Giới tính :</th>
                    <th><?php echo $row['gioitinh']; ?></th>
                </tr>

                <tr>
                    <th>Dân tộc :</th>
                    <th><?php echo $row['dantoc']; ?></th>
                </tr>

                <tr>
                    <th>Tôn giáo :</th>
                    <th><?php echo $row['tongiao']; ?></th>
                </tr>

                <tr>
                    <th>Số CMND/CCCD :</th>
                    <th><?php echo $row['cmnd']; ?></th>
                </tr>

                <tr>
                    <th>Ngày cấp :</th>
                    <th><?php echo $row['ngaycap']; ?></th>
                </tr>

                <tr>
                    <th>Nơi cấp :</th>
                    <th><?php echo $row['noicap']; ?></th>
                </tr>

                <tr>
                    <th>Năm tốt nghiệp :</th>
                    <th><?php echo $row['namtotnghiep']; ?></th>
                </tr>

                <tr>
                    <th>Học lực :</th>
                    <th><?php echo $row['hocluc']; ?></th>
                </tr>

                <tr>
                    <th>Hạnh kiểm :</th>
                    <th><?php echo $row['hanhkiem']; ?></th>
                </tr>

                <tr>
                    <th>Hộ khẩu thường chú :</th>
                    <th><?php echo $row['hokhautc']; ?></th>
                </tr>

                <tr>
                    <th>Mã tỉnh năm lớp 10 :</th>
                    <th><?php echo $row['matinh10']; ?></th>
                </tr>

                <tr>
                    <th>Tên tỉnh năm lớp 10 :</th>
                    <th><?php echo $row['tinh10']; ?></th>
                </tr>

                <tr>
                    <th>Mã trường năm lớp 10 :</th>
                    <th><?php echo $row['matruong10']; ?></th>
                </tr>

                <tr>
                    <th>Tên trường năm lớp 10 :</th>
                    <th><?php echo $row['tentruong11']; ?></th>
                </tr>

                <tr>
                    <th>Mã tỉnh năm lớp 11 :</th>
                    <th><?php echo $row['matinh11']; ?></th>
                </tr>

                <tr>
                    <th>Tên tỉnh năm lớp 11 :</th>
                    <th><?php echo $row['tinh11']; ?></th>
                </tr>

                <tr>
                    <th>Mã trường năm lớp 11 :</th>
                    <th><?php echo $row['matruong11']; ?></th>
                </tr>

                <tr>
                    <th>Tên trường năm lớp 11 :</th>
                    <th><?php echo $row['tentruong11']; ?></th>
                </tr>

                <tr>
                    <th>Mã tỉnh năm lớp 12 :</th>
                    <th><?php echo $row['matinh12']; ?></th>
                </tr>

                <tr>
                    <th>Tên tỉnh năm lớp 12 :</th>
                    <th><?php echo $row['tinh12']; ?></th>
                </tr>

                <tr>
                    <th>Mã trường năm lớp 12 :</th>
                    <th><?php echo $row['matruong12']; ?></th>
                </tr>

                <tr>
                    <th>Tên trường năm lớp 12 :</th>
                    <th><?php echo $row['tentruong12']; ?></th>
                </tr>

                <tr>
                    <th>Đối tượng ưu tiên :</th>
                    <th><?php echo $row['dtuutien']; ?></th>
                </tr>

                <tr>
                    <th>Khu vực ưu tiên :</th>
                    <th><?php echo $row['kvuutien']; ?></th>
                </tr>

                <tr>
                    <th>Địa chỉ liên hệ :</th>
                    <th><?php echo $row['diachilh']; ?></th>
                </tr>

                <tr>
                    <th>Số điện thọai thí sinh :</th>
                    <th><?php echo $row['sdt']; ?></th>
                </tr>
                
                <tr>
                    <th>Số điện thọai phụ huynh :</th>
                    <th><?php echo $row['sdtph']; ?></th>
                </tr>
            </table>           
          
    <?php } ?>            

            <a href="danhsach.php" class="btn btn-danger"><i class="fas fa-backspace"></i> Trở về</a>
        </div>       
    </div>
</div>