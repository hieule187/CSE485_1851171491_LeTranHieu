<?php
    require_once 'controllers/authController.php';
    
    // verify the user using token
    if (isset($_GET['token'])) {
        $token = $_GET['token'];
        verifyUser($token);
    }

    if (!isset($_SESSION['id'])) {
        header('location: login.php');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylemail.css">
    <title>Homepage</title>
</head>

<body>
    
    <div class="container">
        <div class="row">

            <div class="col-md-4 offset-md-4 form-div login">

               <?php if(isset($_SESSION['message'])): ?>
                    <div class="alert <?php echo $_SESSION['alert-class']; ?>">
                        <?php 
                            echo $_SESSION['message']; 
                            unset($_SESSION['message']);
                            unset($_SESSION['alert-class']);
                        ?>
                    </div>    
               <?php endif; ?>
               <h3>Chào mừng, <?php echo $_SESSION['username']; ?></h3>

               <a href="index_mail.php?logout=1" class="logout">Đăng xuất</a>

               <?php if(!$_SESSION['verified']): ?>
                    <div class="alert alert-warning">
                        Bạn cần xác minh tài khoản.
                        Hãy đăng nhập vào tài khoản email của bạn và nhấp vào
                        liên kết xác minh chúng tôi vừa gửi cho bạn tại địa chỉ:
                        <strong><?php echo $_SESSION['email']; ?></strong>
                    </div>
               <?php endif; ?>

               <?php if($_SESSION['verified']): ?>
                    <a href="index.php" class="btn btn-block btn-lg btn-primary">Trang chủ</a>
               <?php endif; ?>

            </div>
        </div>
    </div>

</body>
</html>