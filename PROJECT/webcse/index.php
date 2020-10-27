<?php
    require_once 'controllers/authController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
    <title>CSE-TLU</title>
</head>
<body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="ANIfB6uD"></script>

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
                    <li><a href="#">Nộp hồ sơ online</a></li>
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

            <?php if (isset($_SESSION['id'])): ?>
                <li>
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <?php echo $_SESSION['username']; ?>
                        <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                    </a>
                    <ul >
                        <li><a href="#">Tùy chọn</a></li>
                        <li><a href="index.php?logout=1" class="logout">Đăng xuất</a></li>  
                    </ul>
                </li>
            <?php else: ?>
                <li>
                    <a href="#">THÀNH VIÊN <i class="fa fa-chevron-down" style="font-size: .8em;"></i></a>
                    <ul >
                        <li><a href="login.php">Đăng nhập</a></li> 
                        <li><a href="signup.php">Đăng ký</a></li> 
                    </ul>
                </li>
            <?php endif; ?>
        </ul>              
    </header>
    
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="post-slider">
            
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">

                <div class="post">
                    <img src="images/p1.jpg" alt="" class="slider-image">
                </div>

                <div class="post">
                    <img src="images/p2.jpg" alt="" class="slider-image">                  
                </div>

                <div class="post">
                    <img src="images/p3.jpg" alt="" class="slider-image">               
                </div>

                <div class="post">
                    <img src="images/p4.jpg" alt="" class="slider-image">
                </div>

                <div class="post">
                    <img src="images/p5.jpg" alt="" class="slider-image">
                </div>

                <div class="post">
                    <img src="images/p6.jpg" alt="" class="slider-image">
                </div>

                <div class="post">
                    <img src="images/p7.jpg" alt="" class="slider-image">
                </div>

                <div class="post">
                    <img src="images/p8.jpg" alt="" class="slider-image">
                </div>

                <div class="post">
                    <img src="images/p9.jpg" alt="" class="slider-image">
                </div>

                <div class="post">
                    <img src="images/p10.jpg" alt="" class="slider-image">
                </div>

                <div class="post">
                    <img src="images/p11.jpg" alt="" class="slider-image">
                </div>

                <div class="post">
                    <img src="images/p12.jpg" alt="" class="slider-image">
                </div>

                <div class="post">
                    <img src="images/p13.jpg" alt="" class="slider-image">
                </div>

                <div class="post">
                    <img src="images/p14.jpg" alt="" class="slider-image">
                </div>

                <div class="post">
                    <img src="images/p15.jpg" alt="" class="slider-image">
                </div>
            </div>
        </div>
    </div>
    <!-- //Page Wrapper -->

    <!-- Content -->
    <div class="content clearfix">
        <!-- Main Content -->
        <div class="main-content">
            <h1 class="recent-post-title">TIN TỨC</h1>

            <div class="post">
                <img src="images/p16.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h3><a href="sigle.html">3 trong 4 sinh viên Trường Đại học Thủy lợi đạt giải tại Olympic Tin học toàn quốc là tân sinh viên Khóa 60</a></h3>
                    
                    &nbsp;
                    <i class="far fa-calendar"> 03-12-2018</i>
                    <p class="preview-text">
                    Kỳ thi Olympic Tin học toàn quốc diễn ra từ ngày 27 – 30/11/2018 tại Học viện Công nghệ Bưu chính Viễn thông.
                    </p>
                    <a href="sigle.html" class="btn read-more">>> Chi tiết</a>
                </div>
            </div>

            <div class="post">
                <img src="images/p17.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h3><a href="sigle.html">Đội tuyển Olympic Tin học toàn quốc ra quân</a></h3>
                    
                    &nbsp;
                    <i class="far fa-calendar"> 28-11-1018</i>
                    <p class="preview-text">
                    (TLU) – “Với thời gian ôn luyện gấp rút trong 2 tháng cùng việc xét chọn kỹ lưỡng qua các bài kiểm tra, đội tuyển Olympic Tin học toàn quốc của Trường Đại học Thủy lợi đã tìm ra 6 gương mặt xuất sắc nhất”
                    </p>
                    <a href="sigle.html" class="btn read-more">>> Chi tiết</a>
                </div>
            </div>

            <div class="post">
                <img src="images/p18.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h3><a href="sigle.html">Công bố Quyết định thành lập Đảng bộ bộ phận Công nghệ thông tin</a></h3>
                    
                    &nbsp;
                    <i class="far fa-calendar"> 16-11-2018</i>
                    <p class="preview-text">
                    (TLU) – Sáng ngày 15/11, tại P225/A2 diễn ra lễ công bố Quyết định thành lập Đảng bộ bộ phận Công nghệ thông tin
                    </p>
                    <a href="sigle.html" class="btn read-more">>> Chi tiết</a>
                </div>
            </div>

            <div class="post">
                <img src="images/p19.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h3><a href="sigle.html">Sinh viên Khoa CNTT giao lưu với công ty Qualica Nhật Bản</a></h3>
                    
                    &nbsp;
                    <i class="far fa-calendar"> 26-04-2018</i>
                    <p class="preview-text">
                    (TLU) – Chiều ngày 23/04/2018, tại Trường Đại học Thủy lợi diễn ra buổi giao lưu giữa sinh viên Khoa CNTT với các lãnh đạo và nhân viên của công ty Qualica đang làm việc tại Nhật Bản
                    </p>
                    <a href="sigle.html" class="btn read-more">>> Chi tiết</a>
                </div>
            </div>

        </div>
        <!-- //Main Content -->

        <div class="sidebar">

            <div class="fb-page" data-href="https://www.facebook.com/cse.tlu.edu.vn/" data-tabs="" data-width="409" data-height="550" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cse.tlu.edu.vn/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cse.tlu.edu.vn/">Khoa Công nghệ thông tin- Đại học Thủy lợi</a></blockquote></div>

            <div class="section search">
                <h2 class="section-title">Tìm kiếm</h2>
                <form action="index.html" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Search...">
                </form>
            </div>


            
            <div class="section topics">
                <h2 class="section-title">Nội dung khác</h2>
                <ul>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Lời chào mừng</a></li>
                    <li><a href="#">Giảng viên</a></li>
                    <li><a href="#">Sinh viên</a></li>
                    <li><a href="#">Thông báo</a></li>
                    <li><a href="#">Liên hệ</a></li>
                    <li><a href="#">Ảnh khoa CNTT</a></li>
                </ul>
            </div>

        </div>

    </div>
    <!-- //Content -->

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
                <div class="socials">
                    <a href="https://www.facebook.com/cse.tlu.edu.vn/"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
                
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
                    <button type="submit" class="btn btn-big">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
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
    <!-- Custom Script -->
    <script src="js/script.js"></script>
</body>
</html>