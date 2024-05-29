<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 4</title>
</head>
<body>
    <?php
    $result = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $num1 = isset($_POST['Sothu1']) ? $_POST['Sothu1'] : '';
        $num2 = isset($_POST['Sothu2']) ? $_POST['Sothu2'] : '';
        $Pheptinh = $_POST['pheptinh'];
        
        switch ($Pheptinh) 
        {
            case 'Cong':
                $result = $num1 + $num2;
                break;
            case 'Tru':
                $result = $num1 - $num2;
                break;
            case 'Nhan':
                $result = $num1 * $num2;
                break;
            case 'Chia':
                if ($num2 != 0) 
                {
                    $result = $num1 / $num2;
                } 
                else 
                {
                    $result = "Không thể chia cho 0";
                }
                break;
            case 'Mod':
                if ($num2 != 0) 
                {
                    $result = $num1 % $num2;
                } 
                else 
                {
                    $result = "Không thể chia cho 0";
                }
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
            document.getElementById('result').value = result;
        }
    </script>

    <center><h1 style="font-size: 50px; margin-top: 40px; margin-bottom: 0">TÍNH TOÁN SỐ HỌC</h1></center>
    <hr color="black" size="2"><br><br>
    <form action="" method="post">
        Số thứ 1: <input type="text" name="Sothu1" id="num1" value="<?php echo isset($_POST['Sothu1']) ? $_POST['Sothu1'] : ''; ?>"
        style="padding: 6px 10px"><br><br>
        Số thứ 2: <input type="text" name="Sothu2" id="num2" value="<?php echo isset($_POST['Sothu2']) ? $_POST['Sothu2'] : ''; ?>"
        style="padding: 6px 10px"><br><br>
        Kết quả: <input type="text" name="KetQua" id="result" value="<?php echo $result; ?>" 
        style="margin-left: 4px; padding: 6px 10px" readonly><br><br>
        <button type="submit" name="pheptinh" value="Cong" onclick="Ketqua(parseFloat(document.getElementById('Sothu1').value) + parseFloat(document.getElementById('Sothu2').value))"
        style="padding: 6px 15px"><b>Cộng</b></button>
        <button type="submit" name="pheptinh" value="Tru" onclick="Ketqua(parseFloat(document.getElementById('Sothu1').value) - parseFloat(document.getElementById('Sothu2').value))"
        style="margin-left: 24px; padding: 6px 15px"><b>Trừ</b></button>
        <button type="submit" name="pheptinh" value="Nhan" onclick="Ketqua(parseFloat(document.getElementById('Sothu1').value) * parseFloat(document.getElementById('Sothu2').value))"
        style="margin-left: 24px; padding: 6px 15px"><b>Nhân</b></button>
        <button type="submit" name="pheptinh" value="Chia" onclick="Ketqua(parseFloat(document.getElementById('Sothu1').value) / parseFloat(document.getElementById('Sothu2').value))"
        style="margin-left: 24px; padding: 6px 15px"><b>Chia</b></button>
        <button type="submit" name="pheptinh" value="Mod" onclick="Ketqua(parseFloat(document.getElementById('Sothu1').value) % parseFloat(document.getElementById('Sothu2').value))"
        style="margin-left: 24px; padding: 6px 15px"><b>Mod</b></button>
    </form>
</body>
</html>