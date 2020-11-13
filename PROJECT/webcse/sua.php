<?php
    require 'config/db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Sửa thông tin hồ sơ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"  href="css/stylehoso.css">  
</head>
  <body>   
      
    



<?php    
    $id = $_GET['id'];
    $sql_up = "SELECT * FROM ttusers WHERE id = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $hoten = $_POST['hoten'];
        $ngaysinh = $_POST['ngaysinh'];
        $noisinh = $_POST['noisinh'];
        $hocluc = $_POST['hocluc'];
        $gioitinh = $_POST['gioitinh'];
        $dantoc = $_POST['dantoc'];
        $tongiao = $_POST['tongiao'];
        $namtotnghiep = $_POST['namtotnghiep'];
        $hanhkiem = $_POST['hanhkiem'];
        $cmnd = $_POST['cmnd'];
        $ngaycap = $_POST['ngaycap'];
        $noicap = $_POST['noicap'];
        $hokhautc = $_POST['hokhautc'];
        $dtuutien = $_POST['dtuutien'];
        $kvuutien = $_POST['kvuutien'];
        $diachilh = $_POST['diachilh'];
        $sdt = $_POST['sdt'];
        $sdtph = $_POST['sdtph'];
        $matinh10 = $_POST['matinh10'];
        $matinh11 = $_POST['matinh11'];
        $matinh12 = $_POST['matinh12'];
        $tinh10 = $_POST['tinh10'];
        $tinh11 = $_POST['tinh11'];
        $tinh12 = $_POST['tinh12'];
        $matruong10 = $_POST['matruong10'];
        $matruong11 = $_POST['matruong11'];
        $matruong12 = $_POST['matruong12'];
        $tentruong10 = $_POST['tentruong10'];
        $tentruong11 = $_POST['tentruong11'];
        $tentruong12 = $_POST['tentruong12'];

        $sql = "UPDATE ttusers SET hoten = '$hoten', ngaysinh = '$ngaysinh', noisinh = '$noisinh', hocluc = '$hocluc', gioitinh = '$gioitinh', dantoc = '$dantoc', tongiao = '$tongiao', namtotnghiep = '$namtotnghiep', hanhkiem = '$hanhkiem', cmnd = '$cmnd', ngaycap = '$ngaycap', noicap = '$noicap', hokhautc = '$hokhautc', dtuutien = '$dtuutien', kvuutien = '$kvuutien', diachilh = '$diachilh',
        sdt = '$sdt', sdtph = '$sdtph', matinh10 = '$matinh10', matinh11 = '$matinh11', matinh12 = '$matinh12', tinh10 = '$tinh10', tinh11 = '$tinh11', tinh12 = '$tinh12', matruong10 = '$matruong10', matruong11 = '$matruong11', matruong12 = '$matruong12', tentruong10 = '$tentruong10', tentruong11 = '$tentruong11', tentruong12 = '$tentruong12' WHERE id = $id"; 

        $query = mysqli_query($conn, $sql);
       
        header('Location:danhsach.php');     

    }
?>    


<div class="container-fluid"> 
    <div class="row">
        <div class="col-md-2">
            <ul class="menu-links">
                <header>Danh Mục</header>
                <li class="MENU0" ><a href="index.php"><i class="fas fa-home"></i>Trang chủ</a></li>
                <li class="MENU1" ><a href="#"><i class="fas fa-book-open"></i>Điều Kiện Xét Tuyển</a></li>
                <li class="MENU2" ><a href="#"><i class="fas fa-border-all"></i>Ngành Xét Tuyển</a></li>
                <li class="MENU3">  <a href="#"><i class="fas fa-id-card"></i>Hồ sơ và cách đăng ký</a></li>
                <li class="MENU4"><a href="#"><i class="fas fa-edit"></i>Đăng ký Xét Tuyển</a></li>
            </ul>
        </div>

        <div class="col-md-10">
        
        <form class="card-body" method="POST" enctype="multipart/form-data" > 
            <div class="container">               
                <br>                           
                <h2 class="form-name">THÔNG TIN HỒ SƠ</h2>
                <br>
                <div class="row">         
                    <div class="col-md-6">
                        <div class="left">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Họ và tên</span>
                                </div>
                                <input type="text" name="hoten" value="<?php echo $row_up['hoten']; ?>" class="form-control" placeholder="Nhập tên">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Ngày sinh</span>
                                </div>
                                <input type="date" name="ngaysinh" value="<?php echo $row_up['ngaysinh']; ?>" class="form-control">
                            </div> 

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" for="noisinh">Nơi sinh</span>
                                </div>
                                <select class="custom-select" name="noisinh" value="<?php echo $row_up['noisinh']; ?>" >
                                <option selected>-Chọn Tỉnh-</option>
                                <?php
                                    $sql = "SELECT * FROM tinhthanh";
                                    mysqli_set_charset($conn);
                                    $result = mysqli_query($conn,$sql);
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<option>".$row['tentinh']."</option>";
                                    }
                                ?>
                                </select>
                            </div>                                                  
                
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Số CMND/CCCD</span>
                                </div>
                                <input type="text" class="form-control" name="cmnd" value="<?php echo $row_up['cmnd']; ?>" placeholder="Số CMND/CCCD">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Ngày cấp</span>
                                </div>
                                <input type="date" name="ngaycap" value="<?php echo $row_up['ngaycap']; ?>" class="form-control">
                            </div> 

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" for="noicap">Nơi cấp</span>
                                </div>
                                <select class="custom-select" name="noicap" value="<?php echo $row_up['noicap']; ?>" >
                                <option selected>-Chọn Tỉnh-</option>
                                <?php
                                    $sql = "SELECT * FROM tinhthanh";
                                    mysqli_set_charset($conn);
                                    $result = mysqli_query($conn,$sql);
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<option>".$row['tentinh']."</option>";
                                    }
                                ?>
                                </select>
                            </div>          
                        </div>
                 
                    </div>   

                    <div class="col-md-6">
                        <div class="right">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" for="gioitinh">Giới tính</span>
                                </div>
                                <select class="custom-select" name="gioitinh" value="<?php echo $row_up['gioitinh']; ?>" >
                                    <option selected>-Chọn-</option>
                                    <option>Nam</option>
                                    <option>Nữ</option>                          
                                </select> 
                            </div>
                                             
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Dân tộc</span>
                                </div>
                                <input type="text" class="form-control" name="dantoc" value="<?php echo $row_up['dantoc']; ?>" placeholder="Nhập tên">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Tôn giáo</span>
                                </div>
                                <input type="text" class="form-control" name="tongiao" value="<?php echo $row_up['tongiao']; ?>" placeholder="Nhập tên">
                            </div>
                    
                
                    
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Năm tốt nghiệp</span>
                                </div>
                                <input type="year" name="namtotnghiep" value="<?php echo $row_up['namtotnghiep']; ?>" class="form-control" placeholder="Nhập năm">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" for="hocluc">Học lực lớp 12</span>
                                </div>
                                <select class="custom-select" name="hocluc" value="<?php echo $row_up['hocluc']; ?>" >
                                    <option selected>-Chọn-</option>
                                    <option>Giỏi</option>
                                    <option>Khá</option>
                                    <option>Trung bình</option>
                                    <option>Yếu</option>   
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" for="hanhkiem">Hạnh kiểm lớp 12</span>
                                </div>
                                <select class="custom-select" name="hanhkiem" value="<?php echo $row_up['hanhkiem']; ?>" >
                                    <option selected>-Chọn-</option>
                                    <option>Tốt</option>
                                    <option>Khá</option>
                                    <option>Trung bình</option>
                                    <option>Yếu</option>   
                                    <option>Kém</option>
                                </select>                  
                            </div>                                               
                        </div>   
                    </div>
                </div>
            </div>
            <br>
      
            <div class="container">
                                                   
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" >Hộ khẩu thường chú</span>
                    </div>
                    <input type="text" class="form-control" name="hokhautc" value="<?php echo $row_up['hokhautc']; ?>" placeholder="Nhập hộ khẩu thường chú">
                </div>
        
                <i>Ghi rõ tên tỉnh(thành phố),huyện(quận),xã(phường) vào ô hộ khẩu thường trú.</i>
                <br>
                <br>
                <h5>Nơi học THPT hoặc tương đương (ghi tên trường và địa chỉ trường: huyện(quận) ,tỉnh(thành phố)):</h5>    
                <br>               
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-2">                      
                        <p>Năm học</p>                 
                        <span class="input-group-text" id="basic-addon1">Năm lớp 10</span>
                        <br>                           
                        <span class="input-group-text" id="basic-addon1">Năm lớp 11</span>
                        <br>                      
                        <span class="input-group-text" id="basic-addon1">Năm lớp 12</span>
                    </div>

                    <div class="col-md-2">
                        <p>Mã Tỉnh</p>
                        <input type="text" class="form-control" name="matinh10" value="<?php echo $row_up['matinh10']; ?>"  placeholder="Nhập Mã" >                           
                        <br>
                        <input type="text" class="form-control" name="matinh11" value="<?php echo $row_up['matinh11']; ?>"  placeholder="Nhập Mã" >                            
                        <br>
                        <input type="text" class="form-control" name="matinh12" value="<?php echo $row_up['matinh12']; ?>"  placeholder="Nhập Mã" >
                    </div>

                    <div class="col-md-2">
                        <p>Tên Tỉnh/TP</p>
                        <select class="custom-select" name="tinh10" value="<?php echo $row_up['tinh10']; ?>" id="tentinh">
                        <option selected>-Chọn Tỉnh-</option>
                        <?php
                            $sql = "SELECT * FROM tinhthanh";
                            mysqli_set_charset($conn);
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<option>".$row['tentinh']."</option>";
                            }
                        ?>
                        </select>
                        <br> 
                        <br>

                        <select class="custom-select" name="tinh11" value="<?php echo $row_up['tinh11']; ?>" id="tentinh">
                        <option selected>-Chọn Tỉnh-</option>
                        <?php
                            $sql = "SELECT * FROM tinhthanh";
                            mysqli_set_charset($conn);
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<option>".$row['tentinh']."</option>";
                            }
                        ?>
                        </select>
                        <br> 
                        <br>

                        <select class="custom-select" name="tinh12" value="<?php echo $row_up['tinh12']; ?>" id="tentinh">
                        <option selected>-Chọn Tỉnh-</option>
                        <?php
                            $sql = "SELECT * FROM tinhthanh";
                            mysqli_set_charset($conn);
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<option>".$row['tentinh']."</option>";
                            }
                        ?>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <p>Mã Trường</p>
                        <input type="text" class="form-control" name="matruong10" value="<?php echo $row_up['matruong10']; ?>" placeholder="Nhập Mã">                            
                        <br>
                        <input type="text" class="form-control" name="matruong11" value="<?php echo $row_up['matruong11']; ?>" placeholder="Nhập Mã">                           
                        <br>
                        <input type="text" class="form-control" name="matruong12" value="<?php echo $row_up['matruong12']; ?>" placeholder="Nhập Mã">
                    </div>

                    <div class="col-md-4">                       
                        <p>Tên Trường</p>
                        <input  list="tentruong" class="form-control" name="tentruong10" value="<?php echo $row_up['tentruong10']; ?>" placeholder="Tên Trường">                                                                                                                                    
                        <br>
                        <input  list="tentruong" class="form-control" name="tentruong11" value="<?php echo $row_up['tentruong11']; ?>" placeholder="Tên Trường">                                              
                        <br>
                        <input  list="tentruong" class="form-control" name="tentruong12" value="<?php echo $row_up['tentruong12']; ?>" placeholder="Tên Trường">                           
                    </div>                  
                </div>

            </div>
            <br> 
            <br>

            <div class="container">
                <div class="row">

                    <div class="col-md-9">            
                        <p>Đối tượng ưu tiên tuyển sinh: <i>(Thuộc đối tượng nào thì chọn đối tượng bên phải)</i></p>
                        <br> 
                        <p>Khu vực ưu tiên tuyển sinh: <i>(Thuộc khu vực nào thì chọn ký hiệu của khu vực<br>(KV1,KV2-NT,KV2,KV3)vào ô khu vực ưu tiên)</i></p>
                    </div>

                    <div class="col-md-3">             
                        <select class="custom-select" name="dtuutien" value="<?php echo $row_up['dtuutien']; ?>" >
                            <option selected>-Chọn-</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>   
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>Không</option>
                        </select>                     
                        <br>
                        <br>
         
                        <select class="custom-select" name="kvuutien" value="<?php echo $row_up['kvuutien']; ?>" >
                            <option selected>-Chọn-</option>
                            <option>KV1</option>
                            <option>KV2-NT</option>
                            <option>KV2</option>
                            <option>KV3</option>                         
                        </select> 

                    </div>
                </div>
            </div>
            <br> 

            <div class="container">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" >Địa chỉ liên hệ</span>
                    </div>
                    <input type="text" class="form-control" name="diachilh" value="<?php echo $row_up['diachilh']; ?>" placeholder="Nhập địa chỉ liên hệ">
                </div>  
            </div>

            <div class="container">  
                <div class="row">                                                                                      
                    <div class="col-md-6">
                    <br>  
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" >Địện thoại thí sinh</span>
                            </div>
                            <input type="text" class="form-control" name="sdt" value="<?php echo $row_up['sdt']; ?>" placeholder="Nhập số điện thoại">
                        </div>
                    </div>

                    <div class="col-md-6">
                    <br> 
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" >Địện thoại phụ huynh</span>
                            </div>
                            <input type="text" class="form-control" name="sdtph" value="<?php echo $row_up['sdtph']; ?>" placeholder="Nhập số điện thoại">
                        </div>                    
                    </div> 

                </div>
                
            </div>
            
            <button name="sbm" class="btn btn-primary" type="submit"><i class="fa fa-envelope"></i> Cập nhật thông tin hồ sơ</button>  
            
        </form>  
                   
        </div>       
    </div>
</div>      


 <!-- Footer -->
 
<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>               
</body>
</html>