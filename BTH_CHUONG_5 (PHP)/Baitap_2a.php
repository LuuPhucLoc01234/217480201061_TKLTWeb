<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2a</title>
    <style>
        p {
            font-family: 'Times New Roman';
            font-size: 21px;
        }
    </style>
</head>
<body>
    <?php 
    $hoten = "Nguyễn Thanh Minh";
    $ngaysinh = "12/09/2000";
    $lop = "12A1";
    $diem = 8.9;
    ?>
    <h1>Thông tin sinh viên</h1>
    <p>Họ và tên: <?php echo $hoten; ?></p>
    <p>Ngày sinh: <?php echo $ngaysinh; ?></p>
    <p>Lớp: <?php echo $lop; ?></p>
    <p>Điểm: <?php echo $diem; ?></p>
</body>
</html>