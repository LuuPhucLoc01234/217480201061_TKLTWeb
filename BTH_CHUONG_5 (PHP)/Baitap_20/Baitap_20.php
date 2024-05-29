<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 20</title>
    <style>
        body {
            background-color: cyan;
        }
        table {
            width: 100%;
            height: 50px;
            border-collapse: collapse;
        }
        th {
            font-size: 35px;
            font-weight: bold;
            text-align: center;
            color: white;
            background-color: blue;
            text-align: center;
        }
        .login-container {
            background-color: white;
            margin-left: 358px;
            margin-top: 50px;
            width: 600px;
            height: 430px;
            padding: 0;
            border: 3px solid black;
            text-align: center;
        }
        input {
            padding: 10px;
            margin-right: 10px;
            border-radius: 5px;
            border: 1px solid black;
            background-image: none;
            background-position: right center;
            background-repeat: no-repeat;
            font-size: 16px;
        }
        input[type="text"] {
            background-size: 25px 25px;
        }
        input[type="password"] {
            background-size: 25px 25px;
        }
        input[type="submit"], button {
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: white;
        }
        button {
            width: 447px;
            margin-right: 10px;
            background-color: blue;
        }
        .email {
            background-image: url('email.png'); 
            background-position: right center; 
            background-repeat: no-repeat;
        }
        .lock {
            background-image: url('lock.png'); 
            background-position: right center; 
            background-repeat: no-repeat;
        }
        .code {
            background-image: url('code.png'); 
            background-position: right center; 
            background-repeat: no-repeat;
        }
        .hien {
            font-size: 17px;
            font-weight: bold;
            width: 70px; 
            height: 40px; 
            text-align: center; 
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <table border="0" style="width: 100%; height: 50px" cellspacing="0">
            <th>Đăng nhập thành viên</th>
        </table>
        <br><br><br>
        <form action="" method="post">
            <input type="text" name="email" placeholder="Email name" class="email">
            <input type="text" value="@blu.edu.vn" readonly><br><br>
            <input type="password" name="Matkhau" placeholder="Password" class="lock" 
            style="font-size: 16px; width: 363px; height: 40px;">
            <button type="button" onclick="HienMatKhau()" class="hien">Hiện</button><br><br>
            <input type="text" name="ma_so" class="code" 
            style="font-size: 16px; width: 447px; height: 40px" placeholder="Mã số"><br><br><br>
            <button type="submit">Đăng nhập</button><br><br>
            <button type="button">Đăng ký</button>
        </form>
    </div>
    <script>
        function HienMatKhau() 
        {
            var NhapMatKhau = document.querySelector('input[type="password"]');
            if (NhapMatKhau.type === "password") 
            {
                NhapMatKhau.type = "text";
            } 
            else 
            {
                NhapMatKhau.type = "password";
            }
        }
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Lấy thông tin từ form
        $email = $_POST['email'] . "@blu.edu.vn";
        $password = $_POST['Matkhau'];
        $ma_so = $_POST['ma_so'];
    
        // Kiểm tra thông tin đăng nhập với dữ liệu trong tập tin user.ini
        $users = parse_ini_file('user.ini', true);
    
        foreach ($users as $user) 
        {
            if ($user['email'] === $email && $user['password'] === $password && $user['ma_so'] === $ma_so) 
            {
                // Đăng nhập thành công, tạo cookie
                setcookie('user_email', $email, time() + 180); // Cookie hết hạn sau 3 phút
                echo "<p>Đăng nhập thành công!</p>";
                exit; // Thoát vòng lặp khi đăng nhập thành công
            }
        }
        // Nếu không tìm thấy thông tin đăng nhập trong file user.ini
        echo "<p>Thông tin đăng nhập không đúng!</p>";
    }
    ?>
</body>
</html>