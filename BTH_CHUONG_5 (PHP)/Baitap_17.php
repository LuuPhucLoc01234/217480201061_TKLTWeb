<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 17</title>
</head>
<body>
     <h1>Nhập chuỗi cần tách từ</h1>
    <form method="post">
        <label for="chuoi" style="font-size: 21px">Nhập chuỗi s:</label>
        <input type="text" id="chuoi" name="chuoi" style="width: 222px; height: 30px" required><br>
        <button type="submit" style="font-size: 21px; padding: 6px 16px">Tách từ</button>
    </form>

    <?php
    // Xử lý yêu cầu nhập chuỗi và tách từ
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Lấy chuỗi từ người dùng
        $chuoi = $_POST['chuoi'];

        // Tách từ trong chuỗi
        $words = explode(' ', $chuoi);

        // In kết quả ra màn hình
        echo "<br>Các từ trong chuỗi \"$chuoi\":<br><br>";
        foreach ($words as $index => $word) 
        {
            echo "<p>a[" . ($index + 1) . "] = \"$word\"<p>";
            if ($index < count($words) - 1) 
            {
                echo " ; ";
            }
        }
    }
    ?>
</body>
</html>