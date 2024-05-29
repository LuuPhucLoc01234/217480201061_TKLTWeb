<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 5</title>
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
    $database = "sinhvien";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql1 = "DELETE FROM danhsach WHERE msv='14DTH1'";
    $result = mysqli_query($conn, $sql1);
    if ($result) {
        echo "Xóa thành công"."<br>";
    } else{
        echo "Xóa nhật thất bại";
    }
    $sql = "SELECT * FROM danhsach";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>MSV</th>";
            echo "<th>Họ tên</th>";
            echo "<th>Ngày sinh</th>";
            echo "<th>Ngành học</th>";
            echo "<th>Tổng điểm</th>";
            echo "</tr>";
    
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['msv'] . "</td>";
                echo "<td>" . $row['hoten'] . "</td>";
                echo "<td>" . $row['ngaysinh'] . "</td>";
                echo "<td>" . $row['nganhhoc'] . "</td>";
                echo "<td>" . $row['tongdiem'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No records found.";
        }
    } else {
        echo "Truy vấn thất bại: ";
    }
    mysqli_close($conn);
?>
</body>
</html>
