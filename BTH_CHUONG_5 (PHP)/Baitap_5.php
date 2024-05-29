<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 5</title>
</head>
<body>
    <?php
    $result = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Lấy giá trị của hai số nhập vào từ form
        $num1 = isset($_POST['Sothu1']) ? $_POST['Sothu1'] : '';
        $num2 = isset($_POST['Sothu2']) ? $_POST['Sothu2'] : '';
        // Hàm tính USCLN
        function USCLN($a, $b)
        {
            while ($b != 0) 
            {
                $temp = $a % $b;
                $a = $b;
                $b = $temp;
            }
            return $a;
        }

        // Hàm tính BSCNN
        function BSCNN($a, $b)
        {
            return ($a * $b) / USCLN($a, $b);
        }
        $pheptinh = isset($_POST['Pheptinh']) ? $_POST['Pheptinh'] : '';

        switch ($pheptinh) 
        {
            case 'uscln':
                $result = USCLN($num1, $num2);
                break;
            case 'bscnn':
                $result = BSCNN($num1, $num2);
                break;
            default:
                $result = "Không xác định";
                break;
        }
    }    
    ?>

    <script lang="JavaScript">
        function Ketqua(result)
        {
            document.getElementById('result') = result;
        }
    </script>

    <center><h1 style="font-size: 50px; margin-top: 40px; margin-bottom: 0">TÍNH USCLN VÀ BSCNN</h1></center>
    <hr color="black" size="2"><br><br>
    <form action="" method="post">
        Số thứ 1: <input type="text" name="Sothu1" id="num1" value="<?php echo isset($_POST['Sothu1']) ? $_POST['Sothu1'] : ''; ?>"
        style="padding: 6px 2px"><br><br>
        Số thứ 2: <input type="text" name="Sothu2" id="num2" value="<?php echo isset($_POST['Sothu2']) ? $_POST['Sothu2'] : ''; ?>"
        style="padding: 6px 2px"><br><br>
        Kết quả: <input type="text" name="Ketqua" id="result" value="<?php echo $result; ?>"
        style="margin-left: 4px; padding: 6px 2px" readonly><br><br>
        <button type="submit" name="Pheptinh" value="uscln" onclick="Ketqua(<?php echo $result; ?>)"
        style="font-family: 'Times New Roman'; font-size: 25px; margin-left: 62px; padding: 6px 75px"><b>USCLN</b></button>
        <button type="submit" name="Pheptinh" value="bscnn" onclick="Ketqua(<?php echo $result; ?>)"
        style="font-family: 'Times New Roman'; font-size: 25px; margin-left: 34px; padding: 6px 75px"><b>BSCNN</b></button>
    </form>
</body>
</html>