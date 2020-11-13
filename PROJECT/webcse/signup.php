<?php
  require_once 'controllers/authController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylemail.css">
    <title>Register</title>
</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div">
               <form action="signup.php" method="post">
                  <h3 class="text-center">Đăng ký</h3>
                  
                  <?php if (count($errors) > 0): ?>               
                    <div class="alert alert-danger">
                        <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </div> 
                  <?php endif; ?>

                    <div class="form-group">
                     <label for="username">Tên tài khoản:</label>
                     <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
                    </div>
                  
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" name="email" value="<?php echo $email; ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                      <label for="password">Mật khẩu:</label>
                      <input type="password" name="password" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                      <label for="passwordConf">Xác nhận mật khẩu:</label>
                      <input type="password" name="passwordConf" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                      <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Đăng ký</button>
                    </div>
                    <p class="text-center">Bạn đã là thành viên ? <a href="login.php">Đăng nhập</a></p>
                    <p class="text-center"><a href="index.php">Trang chủ</a></p>
                    
            </div>
        </div>
    </div>

</body>
</html>