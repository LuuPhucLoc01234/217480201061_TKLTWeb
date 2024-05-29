<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 22</title>
    <style>
        p {
            font-family: 'Times New Roman';
            font-size: 35px;
        }
        label {
            font-size: 20px;
        }
        input[type="text"] {
            width: 290px;
            height: 25px;
        }
        input[type="submit"] {
            font-size: large;
            font-weight: bold;
            width: 140px;
            height: 40px;
            margin-left: 200px;
        }
    </style>
</head>
<body>
    <h1>TRANG ĐĂNG NHẬP CHO KHÁCH HÀNG</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="TenKhachHang" style="margin-left: 75px">Tên khách hàng:</label>
        <input type="text" id="Tenkhachhang" name="TenKhachHang" style="margin-left: 12px"><br><br>
        <label for="SoDienThoai" style="margin-left: 75px">Số điện thoại:</label>
        <input type="text" id="SDT" name="SoDienThoai" style="margin-left: 34px"><br><br>
        <input type="submit" name="submit" value="Đăng nhập">
    </form>
    <br><br>
    <?php
    // Kiểm tra nếu đã có cookie lưu thông tin khách hàng
    if(isset($_COOKIE['TenKhachHang'])) 
    {
        $TenKhachHang = $_COOKIE['TenKhachHang'];
        $SoDienThoai = $_COOKIE['SoDienThoai'];
        echo "<p>Xin chào $TenKhachHang. Số điện thoại của bạn là: $SoDienThoai</p>";
    } 
    else 
    {
        // Nếu chưa có cookie, hiển thị form đăng nhập
        if(isset($_POST['submit'])) 
        {
            // Lấy thông tin từ form
            $TenKhachHang = $_POST['TenKhachHang'];
            $SoDienThoai = $_POST['SoDienThoai'];

            // Tạo cookie với thông tin khách hàng và thời gian tồn tại 10 phút
            setcookie('TenKhachHang', $TenKhachHang, time() + (10 * 60));
            setcookie('SoDienThoai', $SoDienThoai, time() + (10 * 60));

            // Chuyển hướng về trang này để cập nhật cookie
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        }
    }
    ?>
</body>
</html>