<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.php</title>
    <style>
        h1 {
            font-size: 35px;
            text-align: center;
            font-weight: bold;
            margin-top: 30px;
            margin-bottom: 0;
        }
        .login-container {
            background-color: white;
            margin-left: 358px;
            margin-top: 80px;
            width: 600px;
            height: 320px;
            padding: 0;
            border: 4px solid black;
            border-radius: 45px;
            text-align: center;
        }
        p {
            font-size: 35px;
        }
        input[type="submit"] {
            font-family: 'Times New Roman';
            font-size: 20px;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 7px;
            border: 1px solid black;
            cursor: pointer;
            color: white;
            background-color: blue;
            width: 200px;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    // Kiểm tra xem có dữ liệu được gửi từ form không
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Lấy dữ liệu từ form
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Đường dẫn đến file USER.ini lưu trữ thông tin đăng nhập
        $file_path = "USER.ini";

        // Đọc thông tin từ file USER.ini
        $users = parse_ini_file('USER.ini', true);

        // Kiểm tra xem thông tin đăng nhập có trùng khớp không
        $login_valid = false;
        foreach ($users as $user) 
        {
            if ($user['username'] == $username && $user['email'] == $email && $user['password'] == $password) 
            {
                // Thiết lập session
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                // Đánh dấu thông tin đăng nhập hợp lệ
                $login_valid = true;
                break;
            }
        }

        if ($login_valid) 
        {
            echo '<div class="login-container">';
                echo '<h1>Trang xử lý thông tin đăng nhập</h1>';
                echo '<hr color="black" size="2" width="90%"><br>';
                // Hiển thị thông báo
                echo "<p>Thông tin đăng nhập hợp lệ</p>";
                // Hiển thị nút "Trang chính"
                echo '<form action="mainpage.php" method="GET">';
                    echo '<input type="submit" value="Trang chính">';
                echo '</form>';
            echo '</div>';
        } 
        else 
        {
           echo '<div class="login-container">';
                echo '<h1>Trang xử lý thông tin đăng nhập</h1>';
                echo '<hr color="black" size="2" width="90%"><br>';
                // Hiển thị thông báo
                echo "<p>Thông tin đăng nhập không hợp lệ</p>";
            echo '</div>';
        }
    }
    ?>
</body>
</html>

