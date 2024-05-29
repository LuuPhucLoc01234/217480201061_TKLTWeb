<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 7</title>
</head>
<body>
    <div style="font-size: 35px; text-align: justify;">
        <?php
        // Duyệt qua các số từ 1 đến 100
        for ($i = 1; $i <= 100; $i++) 
        {
            // Kiểm tra nếu số là chẵn
            if ($i % 2 == 0) 
            {
                // In số chẵn in đậm
                echo "<b>$i</b>&emsp;";
            } 
            else 
            {
                // In số lẻ in thường
                echo "$i&emsp;";
            }
        }
        ?>
    </div>
</body>
</html>