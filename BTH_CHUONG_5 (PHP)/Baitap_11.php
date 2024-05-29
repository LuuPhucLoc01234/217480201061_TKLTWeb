<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 11</title>
</head>
<body>
    <?php
    // Mảng các chuỗi là tên màu
    $colors = array("black", "blue", "green", "red", "brown", "magenta");

    // Hàm tạo mã màu CSS tương ứng
    function getColorStyle($color) 
    {
        switch ($color) 
        {
            case "black":
                return "<span style='font-size: 45px; color: black'>black, </span>";
            case "blue":
                return "<span style='font-size: 45px; color: blue'>blue, </span>";
            case "green":
                return "<span style='font-size: 45px; color: green'>green, </span>";
            case "red":
                return "<span style='font-size: 45px; color: red'>red, </span>";
            case "brown":
                return "<span style='font-size: 45px; color: brown'>brown, </span>";
            case "magenta":
                return "<span style='font-size: 45px; color: magenta'>magenta,</span>";
            default:
                return ""; // Mặc định trả về rỗng nếu không phù hợp
        }
    }

    // Xuất danh sách các màu với định dạng tương ứng
    foreach ($colors as $color) 
    {
        echo getColorStyle($color);
    }
    echo "<span style='font-size: 45px'>...</span>";
    ?>
</body>
</html>