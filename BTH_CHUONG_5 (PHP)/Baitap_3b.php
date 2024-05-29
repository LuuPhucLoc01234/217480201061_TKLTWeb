<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 3b</title>
    <style>
        p {
            font-family: 'Times New Roman';
            font-size: 30px;
        }
    </style>
</head>
<body>
    <?php 
    (int) $x = rand();
    (int) $y = rand();
    ?>
    
    <h1>Thực hiện tính toán</h1>
    <p><?php echo "$x + $y = " . (intval($x) + intval($y)); ?></p><br>
    <p><?php echo "$x - $y = " . (intval($x) - intval($y)); ?></p><br>
    <p><?php echo "$x x $y = " . (intval($x) * intval($y)); ?></p><br>
    <p><?php echo "$x / $y = " . (intval($x) / intval($y)); ?></p><br>
    <p><?php echo "$x % $y = " . (intval($x) % intval($y)); ?></p><br>
</body>
</html>