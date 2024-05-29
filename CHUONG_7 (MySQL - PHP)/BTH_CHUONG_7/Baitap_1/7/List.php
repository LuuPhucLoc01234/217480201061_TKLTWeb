<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Dữ Liệu</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";

    // Kết nối tới cơ sở dữ liệu
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    // Lấy loại dữ liệu được chọn từ form
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['dataType'])) {
        $dataType = $_POST['dataType'];

        // Khởi tạo câu truy vấn và tiêu đề bảng dựa trên loại dữ liệu
        switch ($dataType) {
            case 'HANGHOA':
                $sql = "SELECT * FROM KHACHHANG";
                $headers = ["Mã Hàng", "Tên Hàng", "Mã Nhà Sản Xuất", "Năm Sản Xuất", "Giá Bán"];
                break;
            case 'KHACHHANG':
                $sql = "SELECT * FROM HANGHOA";
                $headers = ["Mã Khách Hàng", "Tên Khách Hàng", "Năm Sinh", "Điện Thoại", "Địa Chỉ"];
                break;
            case 'NHASANXUAT':
                $sql = "SELECT * FROM NHASANXUAT";
                $headers = ["Mã Nhà Sản Xuất", "Tên Nhà Sản Xuất", "Quốc Gia"];
                break;
            case 'HOADON':
                $sql = "SELECT * FROM HOADON";
                $headers = ["Mã Hóa Đơn", "Mã Khách Hàng", "Mã Hàng", "Số Lượng", "Thành Tiền"];
                break;
            default:
                echo "Loại dữ liệu không hợp lệ.";
                exit();
        }

        $result = mysqli_query($conn, $sql);

        if ($result === false) {
            echo "Lỗi truy vấn: " . mysqli_error($conn);
        } elseif (mysqli_num_rows($result) > 0) {
            echo "<center><h1>Danh Sách Dữ Liệu Của Table $dataType</h1></center>";
            echo "<table>";
            echo "<tr>";
            foreach ($headers as $header) {
                echo "<th>$header</th>";
            }
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Không tìm thấy dữ liệu.";
        }
    } else {
        echo "Không có loại dữ liệu nào được chọn.";
    }

    mysqli_close($conn);
?>
</body>
</html>
