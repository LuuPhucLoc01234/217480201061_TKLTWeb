<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 14</title>
    <style>
        td {
            font-size: 20px;
            font-weight:bold; 
            text-align: center;
            border: 1px solid black; 
            padding: 10px 25px;
        }
        button {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="rows" style="font-size: 21px">Số hàng:</label>
        <input type="number" id="rows" name="rows" required min="1"><br><br>       
        <label for="cols" style="font-size: 21px">Số cột:</label>
        <input type="number" id="cols" name="cols" style="margin-left: 15px" required min="1"><br><br>        
        <label for="matrix" style="font-size: 21px">Ma trận:</label><br><br>
        <textarea name="matrix" id="matrix" rows="8" cols="82" required></textarea><br><br>        
        <button type="submit" name="action" value="max"
        style="padding: 6px 20px">Tìm số lớn nhất</button>
        <button type="submit" name="action" value="min" 
        style="margin-left: 20px; padding: 6px 20px">Tìm số nhỏ nhất</button>
        <button type="submit" name="action" value="sum" 
        style="margin-left: 20px; padding: 6px 20px">Tính tổng các số</button>
        <button type="submit" name="action" value="print" 
        style="margin-left: 20px; padding: 6px 20px">In ma trận</button><br><br>
    </form>

    <?php
    // Hàm chuyển đổi chuỗi nhập vào thành ma trận
    function parseMatrix($input) 
    {
        $lines = explode("\n", $input);
        $matrix = [];
        foreach ($lines as $line) 
        {
            $row = preg_split('/\s+|,/', trim($line));
            $matrix[] = array_map('floatval', $row);
        }
        return $matrix;
    }

    // Hàm tìm số lớn nhất trong ma trận
    function findMax($matrix) 
    {
        $max = $matrix[0][0];
        foreach ($matrix as $row) 
        {
            foreach ($row as $element) 
            {
                if ($element > $max) 
                {
                    $max = $element;
                }
            }
        }
        return $max;
    }

    // Hàm tìm số nhỏ nhất trong ma trận
    function findMin($matrix) 
    {
        $min = $matrix[0][0];
        foreach ($matrix as $row) 
        {
            foreach ($row as $element) 
            {
                if ($element < $min) 
                {
                    $min = $element;
                }
            }
        }
        return $min;
    }

    // Hàm tính tổng các số trong ma trận
    function calculateSum($matrix) 
    {
        $sum = 0;
        foreach ($matrix as $row) 
        {
            foreach ($row as $element) 
            {
                $sum += $element;
            }
        }
        return $sum;
    }

    // Hàm in ra màn hình các phần tử trong ma trận
    function printMatrix($matrix) 
    {
        foreach ($matrix as $row) 
        {
            echo implode('  ', $row) . '<br>';
        }
    }

    // Xử lý yêu cầu từ menu
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) 
    {
        $matrix = parseMatrix($_POST['matrix']);
        switch ($_POST['action']) 
        {
            case 'max':
                echo "Số lớn nhất trong ma trận: " . findMax($matrix);
                break;
            case 'min':
                echo "Số nhỏ nhất trong ma trận: " . findMin($matrix);
                break;
            case 'sum':
                echo "Tổng các số trong ma trận: " . calculateSum($matrix);
                break;
            case 'print':
                echo "<table style='border-collapse: collapse;'>";
                foreach ($matrix as $row) 
                {
                    echo "<tr>";
                    foreach ($row as $element) 
                    {
                        echo "<td>$element</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                break;
            default:
                echo "Hành động không hợp lệ!";
                break;
        }
    }
    ?>
</body>
</html>