<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 15</title>
    <style>
        p {
            font-size: 28px;
        }
    </style>
</head>
<body>
    <h1>Đếm số kí tự trong chuỗi</h1>
    <form method="post">
        <label for="input_string" style="font-size: 21px">Nhập chuỗi s:</label>
        <input type="text" id="input_string" name="s" style="margin-left: 3px" required><br><br>    
        <label for="char_to_count" style="font-size: 21px">Nhập kí tự ch:</label>
        <input type="text" id="char_to_count" name="ch" required maxlength="1"><br><br>
        <button type="submit" style="font-size: 21px; padding: 9px 19px">Đếm số lần xuất hiện</button><br><br>
    </form>

    <?php
    // Xử lý yêu cầu nhập chuỗi và kí tự cần đếm
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Lấy chuỗi và kí tự từ người dùng
        $input_string = $_POST['s'];
        $char_to_count = $_POST['ch'];

        // Đếm số lần xuất hiện của kí tự trong chuỗi
        $count = substr_count($input_string, $char_to_count);

        // In kết quả ra màn hình
        echo "<p>Số lần xuất hiện của \"$char_to_count\" trong chuỗi \"$input_string\": $count</p>";
    }
    ?>
</body>
</html>