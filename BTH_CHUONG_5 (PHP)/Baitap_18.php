<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 18</title>
    <style>
        p {
            font-size: 28px;
        }
    </style>
</head>
<body>
    <h1>Tìm chiều dài của từ trong chuỗi</h1>
    <form method="post">
        <label for="chuoi" style="font-size: 21px">Nhập chuỗi s:</label>
        <input type="text" id="chuoi" name="chuoi" style="width: 222px; height: 30px" required><br><br>
        <button type="submit" style="font-size: 21px; padding: 7px 16px">Tìm từ dài nhất</button>
    </form>

    <?php
    // Xử lý yêu cầu nhập chuỗi và tìm từ dài nhất
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Lấy chuỗi từ người dùng
        $chuoi = $_POST['chuoi'];

        // Tách từ trong chuỗi
        $words = explode(' ', $chuoi);

        // Tìm từ dài nhất
        $max_length_word = '';
        foreach ($words as $word) 
        {
            if (strlen($word) > strlen($max_length_word)) 
            {
                $max_length_word = $word;
            }
        }
        // In kết quả ra màn hình
        echo "<p>\"$max_length_word\" có " . strlen($max_length_word) . " kí tự.</p>";
    }
    ?>
</body>
</html>