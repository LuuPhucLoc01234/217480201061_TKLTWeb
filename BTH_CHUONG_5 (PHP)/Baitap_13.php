<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 13</title>
</head>
<body>
    <form method="post">
        <label for="numberList" style="font-size: 35px">Nhập danh sách số nguyên:</label><br><br>
        <input type="text" id="numberList" name="DanhSachSo" 
        value="<?php echo isset($_SESSION['numbers']) ? $_SESSION['numbers'] : ''; ?>" 
        style="width: 392px; height: 40px" required><br><br>
        <button type="submit" name="action" value="max"
        style="padding: 6px 20px; width: 392px">Tìm số lớn nhất trong danh sách</button><br><br>
        <button type="submit" name="action" value="min"
        style="padding: 6px 20px; width: 392px">Tìm số nhỏ nhất trong danh sách</button><br><br>
        <button type="submit" name="action" value="perfect"
        style="padding: 6px 20px; width: 392px">Tìm các số chính phương trong danh sách</button><br><br>
        <button type="submit" name="action" value="even"
        style="padding: 6px 20px; width: 392px">In ra màn hình các số chẵn trong danh sách</button><br><br>
        <button type="submit" name="action" value="odd"
        style="padding: 6px 20px; width: 392px">In ra màn hình các số lẻ trong danh sách</button><br><br>
        <button type="submit" name="action" value="sort"
        style="padding: 6px 20px;">Sắp xếp các phần tử trong danh sách theo thứ tự tăng dần</button><br>
    </form>

    <?php
    // Hàm nhập danh sách số nguyên từ người dùng
    function inputArray() 
    {
        $input = $_POST['DanhSachSo'];
        $numbers = explode(',', $input);
        return array_map('intval', $numbers);
    }

    // Hàm tìm số lớn nhất trong danh sách
    function findMax($array) 
    {
        return max($array);
    }

    // Hàm tìm số nhỏ nhất trong danh sách
    function findMin($array) 
    {
        return min($array);
    }

    // Hàm kiểm tra số chính phương
    function isPerfectSquare($number) 
    {
        $sqrt = sqrt($number);
        return (intval($sqrt) == $sqrt);
    }

    // Hàm tìm các số chính phương trong danh sách
    function findPerfectNumbers($array) 
    {
        $perfectNumbers = [];
        foreach ($array as $number) 
        {
            if (isPerfectSquare($number)) 
            {
                $perfectNumbers[] = $number;
            }
        }
        return $perfectNumbers;
    }

    // Hàm in ra màn hình các số chẵn trong danh sách
    function printEvenNumbers($array) 
    {
        foreach ($array as $number) 
        {

            if ($number % 2 == 0) 
            {
                echo "$number&emsp;";
            }
        }
    }

    // Hàm in ra màn hình các số lẻ trong danh sách
    function printOddNumbers($array) 
    {
        foreach ($array as $number) 
        {
            if ($number % 2 != 0) 
            {
                echo "$number&emsp;";
            }
        }
    }

    // Hàm sắp xếp các phần tử trong danh sách theo thứ tự tăng dần
    function sortArray($array) 
    {
        sort($array);
        return $array; 
    }

    // Xử lý yêu cầu từ menu
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) 
    {
        $action = $_POST['action'];
        $numbers = inputArray();
        switch ($action) 
        {
            case 'max':
                $numbers = inputArray();
                echo "Số lớn nhất trong danh sách: " . findMax($numbers);
                break;
            case 'min':
                $numbers = inputArray();
                echo "Số nhỏ nhất trong danh sách: " . findMin($numbers);
                break;
            case 'perfect':
                $numbers = inputArray();
                echo "Các số chính phương trong danh sách: ";
                print_r(findPerfectNumbers($numbers));
                break;
            case 'even':
                $numbers = inputArray();
                echo "Các số chẵn trong danh sách: ";
                printEvenNumbers($numbers);
                break;
            case 'odd':
                $numbers = inputArray();
                echo "Các số lẻ trong danh sách: ";
                printOddNumbers($numbers);
                break;
            case 'sort':
                $numbers = inputArray();
                echo "Danh sách sau khi sắp xếp: ";
                print_r(sortArray($numbers));
                break;
            default:
                echo "Hành động không hợp lệ!";
                break;
        }
    }
    ?>
</body>
</html>