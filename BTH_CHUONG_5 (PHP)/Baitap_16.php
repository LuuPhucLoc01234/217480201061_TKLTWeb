<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 16</title>
    <style>
        p {
            font-size: 28px;
        }
    </style>
</head>
<body>
    <h1>Đảo ngược chuỗi</h1>
    <form method="post">
        <label for="chuoi" style="font-size: 21px">Nhập chuỗi s:</label>
        <input type="text" id="chuoi" name="chuoi" style="width: 222px; height: 30px" required><br><br>
        <button type="submit" style="font-size: 21px; padding: 9px 19px">Đảo ngược chuỗi</button>
    </form>

    <?php
    // Xử lý yêu cầu nhập chuỗi và đảo ngược chuỗi
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Lấy chuỗi từ người dùng
        $chuoi = $_POST['chuoi'];

        // Đảo ngược chuỗi
        $DaoNguocChuoi = strrev($chuoi);

        // In kết quả ra màn hình
        echo "<p>Chuỗi đảo ngược của \"$chuoi\" là: $DaoNguocChuoi</p>";
    }
    ?>
</body>
</html>