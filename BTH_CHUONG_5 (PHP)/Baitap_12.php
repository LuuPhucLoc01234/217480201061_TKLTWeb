<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 12</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 80px;
            height: 80px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <table border="2">
        <?php
        // Vẽ bàn cờ với 8 hàng và 8 cột
        for ($row = 1; $row <= 8; $row++) 
        {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) 
            {
                // Xác định màu cho từng ô
                if (($row % 2 == 1 && $col % 2 == 1) || ($row % 2 == 0 && $col % 2 == 0)) 
                {
                    echo "<td class='black'></td>"; // Ô màu đen
                } 
                else 
                {
                    echo "<td class='white'></td>"; // Ô màu trắng
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>