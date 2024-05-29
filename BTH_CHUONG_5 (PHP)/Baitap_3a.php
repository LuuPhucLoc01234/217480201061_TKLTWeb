<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 3a</title>
    <style>
        p {
            font-family: 'Times New Roman';
            font-size: 30px;
        }
    </style>
</head>
<body>
    <?php 
    $x = "3";
    $y = "5";
    ?>
    <h1>Thực hiện tính toán</h1>
    <p><?php echo "$x + $y = " . ($x + $y); ?></p>
    <p><?php echo "$x - $y = " . ($x - $y); ?></p>
    <p><?php echo "$x x $y = " . ($x * $y); ?></p>
    <p><?php echo "$x / $y = " . ($x / $y); ?></p>
    <p><?php echo "$x % $y = " . ($x % $y); ?></p>
</body>
</html>