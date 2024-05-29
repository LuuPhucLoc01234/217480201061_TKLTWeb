<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 10</title>
    <style>
        h1 {
            font-size: 50px;
        }
        p {
            font-size: 25px;
        }
    </style>
</head>
<body>
    <h1>Mảng số nguyên</h1>
    <form action="" method="post">
        <label for="numbers" style="font-size: 20px">Nhập mảng các số nguyên</label><br><br>
        <input type="text" id="numbers" name="numbers" style="padding: 8px 36px" required><br><br>
        <input type="submit" value="Thực hiện" style="padding: 8px 16px;">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Hàm kiểm tra số chẵn
        function isEven($number) 
        {
            return $number % 2 == 0;
        }

        // Lấy dữ liệu từ form
        $input = $_POST["numbers"];

        // Chuyển dữ liệu từ chuỗi thành mảng các số nguyên
        $numbers = array_map('intval', explode(',', $input));

        // a. Xuất mảng lên trang web
        echo "<p>a.<br>Mảng: " . implode(", ", $numbers) . "</p>";

        // b. Đếm tổng số chẵn
        $DemSoLuongSoChan = 0;
        foreach ($numbers as $number) 
        {
            if (isEven($number)) 
            {
                $DemSoLuongSoChan++;
            }
        }
        echo "<p>b.<br>Số lượng số chẵn: $DemSoLuongSoChan</p>";
        
        //c. Tính tổng các số lẻ trong mảng
        $TinhTongCacSoLe = 0;
        foreach ($numbers as $number) 
        {
            if (!isEven($number)) 
            {
                $TinhTongCacSoLe += $number;
            }
        }
        echo "<p>c.<br>Tổng các số lẻ: $TinhTongCacSoLe</p>";

        // d. Xuất ra giá trị lớn nhất, nhỏ nhất của mảng
        $GiaTriLonNhat = max($numbers);
        $GiaTriNhoNhat = min($numbers);
        echo "<p>d.<br>Giá trị lớn nhất: $GiaTriLonNhat</p>";
        echo "<p>Giá trị nhỏ nhất: $GiaTriNhoNhat</p>";

        // e. Xuất đảo ngược các giá trị trong mảng
        $DaoNguoc = array_reverse($numbers);
        echo "<p>e.<br>Mảng đảo ngược: " . implode(", ", $DaoNguoc) . "</p>";
    }
    ?>
</body>
</html>