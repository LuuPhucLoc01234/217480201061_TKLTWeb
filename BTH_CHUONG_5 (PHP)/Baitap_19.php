<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 19</title>
    <style>
        p {
            font-size: 30px;
        }
    </style>
</head>
<body>
    <?php 
    echo "<p>Chào bạn, </p><br>";
    if(isset($_COOKIE['thoiGianTruyCap'])) 
    {
        echo "Thời gian truy cập gần đây nhất là: " .date('d/m/Y H:i:s', $_COOKIE['thoiGianTruyCap']);
        setcookie('thoiGianTruyCap', time(), time() + 600);
    }
    else 
    {
        setcookie('thoiGianTruyCap', time(), time() + 600);
    }
    ?>
</body>
</html>