<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2b</title>
    <style>
        p {
            font-family: 'Times New Roman';
            font-size: 21px;
        }
    </style>
</head>
<body>
    <h1>Thông tin sinh viên</h1>
    <form action="" method="post">
        Họ tên: <input type="text" name="hoten" style="margin-left: 22px"><br><br>
        Ngày sinh: <input type="text" name="ngaysinh"><br><br>
        Lớp: <input type="text" name="lop" style="margin-left: 39px"><br><br>
        Điểm: <input type="text" name="diem" style="margin-left: 30px"><br><br>
        <button type="submit" style="padding: 5px 10px; margin-left: 70px">Xác nhận</button><br><br>
    </form>
    <?php 
    if( isset($_POST['hoten']) || isset($_POST['ngaysinh']) || isset($_POST['lop']) || isset($_POST['diem']) ) 
    {
        $hoten = $_POST['hoten'];
        $ngaysinh = $_POST['ngaysinh'];
        $lop = $_POST['lop'];
        $diem = $_POST['diem'];

        echo "<h1>Thông tin sinh viên</h1>";
        echo "<p><b>Họ và tên:</b> $hoten</p>";
        echo "<p><b>Ngày sinh:</b> $ngaysinh</p>";
        echo "<p><b>Lớp:</b> $lop</p>";
        echo "<p><b>Điểm:</b> $diem</p>";
    }
    ?>
</body>
</html>