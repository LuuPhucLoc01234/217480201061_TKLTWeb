<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 8</title>
</head>
<body>
    <form action="#" method="post">
        <label for="year" style="font-size: 20px">Chọn năm:</label>
        <select name="Năm" id="year" style="margin-left: 14px; padding: 6px 15px">
            <?php
            // Lặp qua các năm từ 1900 đến năm hiện tại
            $currentYear = date("Y");
            for ($year = 1900; $year <= $currentYear; $year++) 
            {
                echo "<option value='$year'>$year</option>";
            }
            ?>
        </select>
        <input type="submit" value="Chọn" style="font-size: 15px; margin-left: 24px; padding: 6px 15px">
    </form>

    <?php
    // Xử lý dữ liệu được gửi từ form
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $selectedYear = $_POST["Năm"];
        echo "<p style='font-size: 28px'> Năm đã chọn là: $selectedYear</p>";
    }
    ?>
</body>
</html>