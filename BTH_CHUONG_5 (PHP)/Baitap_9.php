<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 9</title>
    <style>
        body {
            background-color: aquamarine;
        }
        .table-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        .table {
            border-collapse: collapse;
        }
        .table th, td {
            border: none;
        }
        .white-bg {
            background-color: white;
        }
    </style>
</head>
<body>
    <center><h1 style="font-size: 50px;">BẢNG CỬU CHƯƠNG</h1></center>
    <?php
        for ($row = 1; $row <= 10; $row += 5) 
        {
            echo "<div class='table-container'>";
            for ($i = $row; $i <= $row + 4; $i++) 
            {
                echo "<table border='2' style='text-align: center; font-weight: bold; padding: 10px 20px'; class='white-bg'>";
                for ($j = 1; $j <= 10; $j++) 
                {
                    echo "<tr class='white-bg'>";
                    echo "<td class='white-bg'>" . $i . " x " . $j . " = " . ($i * $j) . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            echo "</div>";
        }
    ?>
</body>
</html>