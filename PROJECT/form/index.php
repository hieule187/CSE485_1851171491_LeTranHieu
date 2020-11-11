<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"  href="a.css">  
</head>
  <body>   
      
    <header>
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
    </header>
  <br>


<!--/header elements
    

//body elements
-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        <ul class="menu-links">
                 <header>Danh Mục</header>
                    <li class="MENU1" ><a href="#"><i class="fas fa-book-open"></i>Điều Kiện Xét Tuyển</a></li>
                    <li class="MENU2" ><a href="#"><i class="fas fa-border-all"></i>Ngành Xét Tuyển</a></li>
                    <li class="MENU3">  <a href="#"><i class="fas fa-id-card"></i>Hồ sơ và cách đăng ký</a></li>
                    <li class="MENU4"><a href="#"><i class="fas fa-edit"></i>Đăng ký Xét Tuyển</a></li>
                </ul>
        </div>
        <div  class="col-md-10">
            <div class="container">
          <br>
          <h2 class="form-name">THÔNG TIN HỒ SƠ</h2>
          <br>
         <div class="row">         
            <div class="col-md-6">
                <div class="left">
                    <label>Họ và tên</label>
                    <input type="text" name="HoTen" placeholder="Nhập tên">    
                    <label>Ngày sinh</label>
                    <input type="date" name="Birthday">                
                    <label>Nơi Sinh</label>
                    <input list="NoiSinh" placeholder="-Chọn Tỉnh-">
                    <datalist id="NoiSinh">
                    <option>hà nội</option>
                    <option>Hồ Chí Minh</option>
                    </datalist>                                 
                    <label>Học Lực Lớp 12</label>
                    <input list="HocLuc" placeholder="-Chọn-" size="15">
                    <datalist id="HocLuc">

                    <option>khá</option>
                    <option>giỏi</option>
                    </datalist>              
                 </div>
                 
            </div>     
            <div class="col-md-6">
                <div class="right">
                <label>Giới Tính</label><br>
                    <input style="width: auto;" type="radio" id="Nam" name="Gender" checked>
                    <label for="Nam">Nam</label>
                    <input style="width: auto;" type="radio" id="Nu" name="Gender" >
                    <label for="Nu">Nữ</label>
                    <br>
                    <br>
                    <label>Dân Tộc</label>
                    <input style="width: 32%;" type="text" name="Toc" placeholder="Nhập tên">
                    <label style="margin-left: 30px;">Tôn Giáo</label>
                    <input style="width: 35%;" type="text" name="TonGiao" placeholder="Nhập tên">
                    <br>
                    <label>Năm Tốt Nghiệp</label>
                        <input list="graduate" placeholder="-Chọn-">
                        <datalist id="graduate">
                        <option>2020</option>
                        <option>2019</option>
                        </datalist>
                        <br>
                        <label>Hạnh Kiểm Lớp 12</label>
                            <input list="HanhKiem" placeholder="-Chọn-">
                            <datalist id="HanhKiem">
                                <option>Tốt</option>
                            </datalist>                    
                 </div>   
            </div>
        </div>
      </div>
      <br>
      <br>

      <div class="container">
                  
            <label>Số CMND/CCCD</label>
            <input style="width: 30%;" type="text" name="CMND" placeholder="Số CMND/CCCD">
            <label style="margin-left: 8px;" >Ngày Cấp</label>
            <input style="width: 21%;" type="date" name="NgayCap" placeholder="Ngày Cấp">   
            <label style="margin-left: 11px;" >Nơi Cấp</label>
            <input style="width: 22%;"  list="NoiCap" placeholder="Chọn Tỉnh">
            <datalist id="NoiCap">
                <option>Hà nội</option>
                <option>Hồ Chí Minh</option>
                <option>Hòa Bình</option>
                <option>Thái Nguyên</option>
            </datalist>    
           
                     
            
        <br>
        <br>
        <label>Hộ khẩu thường chú</label>
            <input id="text" type="text" name="HK" placeholder="Nhập hộ khẩu thường chú">
        <br>
        <br>
        <i>Ghi rõ tên tỉnh(thành phố),huyện(quận),xã(phường) vào ô hộ khẩu thường trú.<i>
        <br>
        <br>
      <h5>Nơi học THPT hoặc tương đương (ghi tên trường và địa chỉ trường: huyện(quận) ,tỉnh(thành phố)):</h5>    
      <br>               
      </div>


      <div class="container">
            <div class="row">
                    <div class="col-md-2">                      
                    <br>                   
                        <label >Năm Lớp 10</label>
                          <br> 
                          <br>
                        <label >Năm Lớp 11</label>
                        <br> 
                      <br>
                        <label >Năm Lớp 12</label>
        
                    </div>
                    <div class="col-md-2">
                             <h6>Mã Tỉnh</h6>
                            <input type="text"  placeholder="Nhập Mã" >
                            <br> 
                            <br>
                            <input type="text"  placeholder="Nhập Mã" >
                            <br> 
                            <br>
                            <input type="text"  placeholder="Nhập Mã" >
                    </div>
                    <div class="col-md-2">
                    <h6>Tên Tỉnh/TP</h6>
                    <input  list="Tinh" placeholder="Chọn Tỉnh">
                            <datalist id="Tinh">
                            <option>Hà nội</option>                          
                            </datalist>
                            <br> 
                            <br>
                            <input  list="Tinh" placeholder="Chọn Tỉnh">
                            <datalist  id="Tinh" >
                            <option>Hà nội</option>                          
                            </datalist>
                            <br> 
                            <br>
                            <input  list="Tinh" placeholder="Chọn Tỉnh">
                            <datalist id="Tinh">
                            <option>Hà nội</option>                          
                            </datalist>

                    </div>
                    <div class="col-md-2">
                             <h6>Mã Trường</h6>
                            <input type="text" placeholder="Nhập Mã">
                            <br> 
                            <br>
                            <input type="text" placeholder="Nhập Mã">
                            <br> 
                            <br>
                            <input type="text" placeholder="Nhập Mã">
                    </div>
                    <div class="col-md-4">                       
                    <h6>Tên Trường</h6>
                    <input  list="TenTruong" placeholder="Chọn Trường">
                            <datalist id="TenTruong">
                                <option>Hà nội</option>                          
                            </datalist>
                            <br> 
                            <br>
                            <input  list="TenTruong" placeholder="Chọn Trường">
                            <datalist id="TenTruong">
                            <option>Hà nội</option>                          
                            </datalist>
                            <br> 
                            <br>
                            <input  list="TenTruong" placeholder="Chọn Trường">
                            <datalist id="TenTruong">
                            <option>Hà nội</option>                          
                            </datalist>
                        </div>
                   
            </div>
      </div>
      <br> 
     <br>

     <div class="container">
     <div class="row">
         <div  class="col-md-9">
             
         <p>
          Đối tượng ưu tiên tuyển sinh (thuộc đối tượng nào thì chọn đối tượng bên phải):</p>
          <br> 
         <p>Khu vực ưu tiên tuyển sinh:(Thuộc khu vực nào thì chọn ký hiệu của khu vực <br>
         (KV1,KV2-NT,KV2,KV3)vào ô khu vực ưu tiên)</p>
         </div>
         <div  class="col-md-3">             
         <input  list="DoiTuong" placeholder="-Chọn-">
                 <datalist id="DoiTuong">
                     <option>Hà nội</option>                          
                 </datalist>   
         <br>
         <br> 
         <input  list="KV" placeholder="-Chọn-">
                 <datalist id="KV">
                     <option>Hà nội</option>                          
                 </datalist> 
                 </div>
         </div>
     </div>
     <br> 
     <div class="container">
     <label  >Địa chỉ liên hệ</label>
        <input  type="text" placeholder="Nhập Địa Chỉ">  
     </div>
    <div class="container">  
        <div class="row">                                                                                      
            <div class="col-md-6">
            <br>  
            <label >Điện Thoại Thí Sinh hệ</label>
           <input  type="text" placeholder="Nhập Số Điện Thoại">
            </div>
            <div class="col-md-6">
            <br> 
            <label >Điện Thoại Phụ Huynh</label>
             <input type="text" placeholder="Nhập Số Điện Thoại Phụ Huynh">
           </div>
           <button type="button" class="btn btn-primary"><i class="fa fa-envelope" aria-hidden="true"></i>
            Gửi
            </button>
        </div>
    </div>
        </div>
    </div>
</div>
<br>
<br>

 <!-- Footer -->
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
        <form action="index2.html" method="post">
            <input type="email" name="email" class="text-input contact-input" placeholder="Email của bạn...">
            <textarea name="message" class="text-input contact-input"placeholder="Lời nhắn..."></textarea>
            <button type="button" class="btn btn-primary"><i class="fa fa-envelope" aria-hidden="true"></i>
            Gửi
            </button>
        </form>
    </div>

</div>

<div class="footer-bottom">
    &copy; vpkcntt@tlu.edu.vn | Designed by Lê Trần Hiếu
</div>

</div>
<!-- //Footer -->

<!-- JQuery -->
      


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>               
</body>
</html>