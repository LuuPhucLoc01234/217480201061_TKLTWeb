<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 6</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, tr, td {
            font-size: 30px;
            padding: 10px 45px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th>Số n</th>
            <th>Số n<sup>2</sup></th>
        </tr>
        <?php
        for ($n = 0; $n <= 50; $n++) 
        {
            $n_squared = $n * $n;
            echo "<tr>";
            echo "<td>$n</td>";
            echo "<td>$n_squared</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>