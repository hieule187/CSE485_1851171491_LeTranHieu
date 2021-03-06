<?php
    session_start();

    require 'config/db.php';
    require_once 'emailController.php';


    $errors = array();
    $username = "";
    $email = "";

    // If user clicks on the signup button
    if (isset($_POST['signup-btn'])) {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $passwordConf = $_POST['passwordConf'];
      
      // validation
      if (empty($username)) {
        $errors['username'] = "Hãy nhập tên tài khoản!";
      }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email không hợp lệ!";
      }
      if (empty($email)) {
        $errors['email'] = "Hãy nhập 1 địa chỉ email!";
      }
      if (empty($password)) {
        $errors['password'] = "Hãy nhập mật khẩu!";
      }
      if ($password !== $passwordConf) {
        $errors['password'] = "Hai mật khẩu không khớp!";
      }

      $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
      $stmt = $conn->prepare($emailQuery);
      $stmt->bind_param('s', $email);
      $stmt->execute();
      $result = $stmt->get_result();
      $userCount = $result->num_rows;
      $stmt->close();

      if ($userCount > 0) {
        $errors['email']= "Email này đã tồn tại!";
      }

      if (count($errors) === 0) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));
        $verified = false;

        $sql = "INSERT INTO users (username, email, verified, token, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssbss', $username, $email, $verified, $token, $password);

        if ($stmt->execute()) {
           // login user
            $user_id = $conn->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = $verified;

            sendVerificationEmail($email, $token);

           //set flash message
           $_SESSION['message'] = "Bạn đã đăng nhập!";
           $_SESSION['alert-class'] = "alert-success";
           header('location: index_mail.php');
           exit();
        } else {
            $errors['db_error'] = "Lỗi cơ sở dữ liệu: Không thể đăng ký!";
        }
      }
    }


    // If user clicks on the login button
    if (isset($_POST['login-btn'])) {
      $username = $_POST['username'];   
      $password = $_POST['password'];
      
      // validation
      if (empty($username)) {
        $errors['username'] = "Hãy nhập tên tài khoản!";
      }
      
      if (empty($password)) {
        $errors['password'] = "Hãy nhập mật khẩu!";
      }

      if (count($errors) === 0) {
        $sql = "SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $username, $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
          // login success       
          $_SESSION['id'] = $user['id'];
          $_SESSION['username'] = $user['username'];
          $_SESSION['email'] = $user['email'];
          $_SESSION['verified'] = $user['verified'];
          //set flash message
          $_SESSION['message'] = "Bạn đã đăng nhập!";
          $_SESSION['alert-class'] = "alert-success";
          header('location: index_mail.php');
          exit();

        } else {
          $errors['login_fails'] = "Thông tin đăng nhập sai!";
        }
      }
    }
    
    
    //logout user
    if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['id']);
      unset($_SESSION['username']);
      unset($_SESSION['email']);
      unset($_SESSION['verified']);
      header('Location: login.php');
      exit();
    }


    //verify user by token
    function verifyUser($token)
    {
      global $conn;
      $sql = "SELECT * FROM users WHERE token = '$token' LIMIT 1";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $update_query = "UPDATE users SET verified=1 WHERE token= '$token'";

        if (mysqli_query($conn, $update_query)) {
          // log user in       
          $_SESSION['id'] = $user['id'];
          $_SESSION['username'] = $user['username'];
          $_SESSION['email'] = $user['email'];
          $_SESSION['verified'] = 1;
          //set flash message
          $_SESSION['message'] = "Địa chỉ email của bạn đã được xác minh thành công!";
          $_SESSION['alert-class'] = "alert-success";
          header('location: index_mail.php');
          exit();
        }

      } else {
        echo 'Không tìm thấy người dùng!';
      }
      
    }
?>
