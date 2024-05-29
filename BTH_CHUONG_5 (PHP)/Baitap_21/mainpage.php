<?php
session_start();

// Kiểm tra xem session đã được thiết lập chưa
if (!isset($_SESSION['username']) || !isset($_SESSION['email']) || !isset($_SESSION['password'])) 
{
    // Nếu chưa, chuyển hướng về trang đăng nhập
    header('Location: login.html');
    exit();
}

// Lấy thông tin từ session
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG CHÍNH</title>
    <style>
        body {
            background-color: khaki;
        }
        h1 {
            font-family: Arial;
            font-size: 27px;
            text-align: left;
            font-weight: bold;
            margin-top: 30px;
            margin-left: 30px;
        }
        p {
            font-size: 27px;
            margin-left: 31px;
        }
        .login-container {
            background-color: white;
            margin-left: 153px;
            margin-top: 100px;
            width: 1000px;
            height: 170px;
            padding: 0;
            border: 4px solid black;
            text-align: left;
        }
        .logout {
            font-size: 35px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>TRANG CHÍNH</h1>
        <p>Người dùng đã đăng nhập với tên "<?php echo $username; ?>" và Email là "<?php echo $email; ?>"</p>
    </div>
    <br><br>
    <a href="logout.php"><p class="logout">Đăng xuất</p></a>
</body>
</html>