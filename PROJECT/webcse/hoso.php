<?php
    require 'config/db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Nộp hồ sơ</title>
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
      
  

<!--/header elements

<?php    
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
      
        $sql = "INSERT INTO ttusers (hoten, ngaysinh, noisinh, hocluc, gioitinh, dantoc, tongiao, namtotnghiep, hanhkiem, cmnd, ngaycap, noicap, hokhautc, dtuutien, kvuutien, diachilh, sdt, sdtph, matinh10, matinh11, matinh12, tinh10, tinh11, tinh12, matruong10, matruong11, matruong12, tentruong10, tentruong11, tentruong12) VALUES 
        ('$hoten', '$ngaysinh', '$noisinh', '$hocluc', '$gioitinh', '$dantoc', '$tongiao', '$namtotnghiep', '$hanhkiem', '$cmnd', '$ngaycap', '$noicap', '$hokhautc', '$dtuutien', '$kvuutien', '$diachilh', '$sdt', '$sdtph', '$matinh10', '$matinh11', '$matinh12', '$tinh10', '$tinh11', '$tinh12', '$matruong10', '$matruong11', '$matruong12', '$tentruong10', '$tentruong11', '$tentruong12')";
      
        $query = mysqli_query($conn, $sql);
        
        header('Location:index.php');                                  
    }
?>    

//body elements
-->
<div class="nav">
        <img src="http://cse.tlu.edu.vn/Portals/0/CSE%20logo%20blue.jpg" width="130" height="76" align="left" >
        <div class="logo">
            <h2>Khoa Công Nghệ Thông Tin - Trường Đại học Thủy lợi</h2>
            <h4>Faculty of Computer Science and Engineering - Thuy Loi University</h4>
        </div>
        <img class="fa fa-bars menu-toggle"></img>  
        <ul class="nav">
            <li>
                <a href="#">TRANG CHỦ</a>
                <ul >
                    <li><a href="#">Diễn đàn</a></li>                    
                </ul>
            </li>
            <li>
                <a href="#">NGHIÊN CỨU</a>
                <ul >
                    <li><a href="#">Các đề tài, dự án</a></li> 
                    <li><a href="#">Thông tin seminar</a></li>
                    <li><a href="#">Công trình công bố</a></li>
                    <li><a href="#">Các phòng thí nghiệm</a></li>
                </ul>
            </li>
            <li>
                <a href="#">ĐÀO TẠO</a>
                <ul >
                    <li><a href="#">Đào tạo đại học</a></li> 
                    <li><a href="#">Đào tạo sau đại học</a></li>
                    <li><a href="#">Chuẩn đầu ra</a></li>
                    <li><a href="#">Định hướng nghành nghề</a></li>
                    <li><a href="#">Mô hình đào tạo</a></li>
                </ul>
            </li>
            <li>
                <a href="#">BỘ MÔN</a>
                <ul >
                    <li><a href="#">CN phần mềm</a></li> 
                    <li><a href="#">Hệ thống thông tin</a></li>
                    <li><a href="#">Khoa học máy tính</a></li>
                    <li><a href="#">Kỹ thuật máy tính và mạng</a></li>
                    <li><a href="#">Toán học</a></li>
                    <li><a href="#">Tin học và kỹ thuật tính toán</a></li>
                    <li><a href="#">Trung tâm tin học</a></li>
                </ul>
            </li>
            <li>
                <a href="#">TIN TỨC</a>
                <ul >
                    <li><a href="#">Sự kiện</a></li> 
                    <li><a href="#">CSE trên báo</a></li>
                </ul>
            </li>        
</div>
<br>
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
                                <input type="text" name="hoten" value="" class="form-control" placeholder="Nhập tên">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Ngày sinh</span>
                                </div>
                                <input type="date" name="ngaysinh" value="" class="form-control">
                            </div> 

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" for="noisinh">Nơi sinh</span>
                                </div>
                                <select class="custom-select" name="noisinh" value="" >
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
                                <input type="text" class="form-control" name="cmnd" value="" placeholder="Số CMND/CCCD">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Ngày cấp</span>
                                </div>
                                <input type="date" name="ngaycap" value="" class="form-control">
                            </div> 

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" for="noicap">Nơi cấp</span>
                                </div>
                                <select class="custom-select" name="noicap" value="" >
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
                                <select class="custom-select" name="gioitinh" value="" >
                                    <option selected>-Chọn-</option>
                                    <option>Nam</option>
                                    <option>Nữ</option>                          
                                </select> 
                            </div>
                                             
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Dân tộc</span>
                                </div>
                                <input type="text" class="form-control" name="dantoc" value="" placeholder="Nhập tên">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Tôn giáo</span>
                                </div>
                                <input type="text" class="form-control" name="tongiao" value="" placeholder="Nhập tên">
                            </div>
                    
                
                    
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Năm tốt nghiệp</span>
                                </div>
                                <input type="year" name="namtotnghiep" value="" class="form-control" placeholder="Nhập năm">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" for="hocluc">Học lực lớp 12</span>
                                </div>
                                <select class="custom-select" name="hocluc" value="" >
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
                                <select class="custom-select" name="hanhkiem" value="" >
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
                    <input type="text" class="form-control" name="hokhautc" value="" placeholder="Nhập hộ khẩu thường chú">
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
                        <input type="text" class="form-control" name="matinh10" value=""  placeholder="Nhập Mã" >                           
                        <br>
                        <input type="text" class="form-control" name="matinh11" value=""  placeholder="Nhập Mã" >                            
                        <br>
                        <input type="text" class="form-control" name="matinh12" value=""  placeholder="Nhập Mã" >
                    </div>

                    <div class="col-md-2">
                        <p>Tên Tỉnh/TP</p>
                        <select class="custom-select" name="tinh10" value="" id="tentinh">
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

                        <select class="custom-select" name="tinh11" value="" id="tentinh">
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

                        <select class="custom-select" name="tinh12" value="" id="tentinh">
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
                        <input type="text" class="form-control" name="matruong10" value="" placeholder="Nhập Mã">                            
                        <br>
                        <input type="text" class="form-control" name="matruong11" value="" placeholder="Nhập Mã">                           
                        <br>
                        <input type="text" class="form-control" name="matruong12" value="" placeholder="Nhập Mã">
                    </div>

                    <div class="col-md-4">                       
                        <p>Tên Trường</p>
                        <input  list="tentruong" class="form-control" name="tentruong10" value="" placeholder="Tên Trường">                                                                                                                                    
                        <br>
                        <input  list="tentruong" class="form-control" name="tentruong11" value="" placeholder="Tên Trường">                                              
                        <br>
                        <input  list="tentruong" class="form-control" name="tentruong12" value="" placeholder="Tên Trường">                           
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
                        <select class="custom-select" name="dtuutien" value="" >
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
         
                        <select class="custom-select" name="kvuutien" value="" >
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
                    <input type="text" class="form-control" name="diachilh" value="" placeholder="Nhập địa chỉ liên hệ">
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
                            <input type="text" class="form-control" name="sdt" value="" placeholder="Nhập số điện thoại">
                        </div>
                    </div>

                    <div class="col-md-6">
                    <br> 
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" >Địện thoại phụ huynh</span>
                            </div>
                            <input type="text" class="form-control" name="sdtph" value="" placeholder="Nhập số điện thoại">
                        </div>                    
                    </div> 

                </div>
                
            </div>
            
            <button name="sbm" class="btn btn-primary" type="submit"><i class="fa fa-envelope"></i> Gửi thông tin hồ sơ</button>  
            
        </form>  
                   
        </div>       
    </div>
</div>      

<br>
<div class="footer">

        <div class="footer-content">

            <div class="footer-section about">
                <img src="http://cse.tlu.edu.vn/cse/assets/images/logo.jpg" >
                <p>
                    © 2020 Khoa Công nghệ thông tin - Đại học Thủy lợi.<br/>
                    Địa chỉ: Nhà C1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội.
                </p>

                <div class="contact">
                    <span><i class="fas fa-phone"></i>&nbsp; (+84)-024 3 5632211<br/></span>
                    <span><i class="fas fa-envelope"></i>&nbsp; vpkcntt@tlu.edu.vn</span>
                </div>
                <br/>

                
            </div>
            <div class="footer-section links">
                <h2>Đường dẫn</h2>
                <br>
                <ul>
                    <a href="#">
                        <li>Tổ chức</li>
                    </a>
                    <a href="#">
                        <li>Hợp tác nghiên cứu</li>
                    </a>
                    <a href="#">
                        <li>Tuyển dụng</li>
                    </a>
                    <a href="#">
                        <li>Học bổng</li>
                    </a>
                    <a href="#">
                        <li>Logo khoa CNTT</li>
                    </a>
                </ul>
            </div>

            <div class="footer-section contact-form">
                <h2>Thư phản hồi</h2>
                <br>
                <form action="index.html" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Email của bạn...">
                    <textarea name="message" class="text-input contact-input"placeholder="Lời nhắn..."></textarea>
                    <button  type="submit" class="btn btn-big">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        Gửi
                    </button>
                </form>
            </div>

        </div>

        <div class="footer-bottom">
            &copy; vpkcntt@tlu.edu.vn | Designed by Trần Thế Kha
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