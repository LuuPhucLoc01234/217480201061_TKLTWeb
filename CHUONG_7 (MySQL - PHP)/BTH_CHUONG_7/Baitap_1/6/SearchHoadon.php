<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa thông tin khách hàng</title>
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
<body>
<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn)
    {
        die("Connection failed: ".mysqli_connect_error());
        exit();
    }

    //Khai báo giá trị ban đầu
    $Makh="";

    //Lấy giá trị POST từ form vừa submit
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["txtMakh"]))
        {
            $Makh = $_POST['txtMakh'];
        }

        //Xử lý, Update dữ liệu trong table KHACHHANG
        $sql = "SELECT * FROM hoadon WHERE makh='$Makh'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) 
        {
            echo "<table>";
            echo "<tr>";
            echo "<th>Mã hóa đơn</th>";
            echo "<th>Mã khách hàng</th>";
            echo "<th>Mã hàng</th>";
            echo "<th>Số lượng</th>";
            echo "<th>Thành tiền</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($result)) 
            {
                echo "<tr>";
                echo "<td>" . $row['mahd'] . "</td>";
                echo "<td>" . $row['makh'] . "</td>";
                echo "<td>" . $row['mahang'] . "</td>";
                echo "<td>" . $row['soluong'] . "</td>";
                echo "<td>" . $row['thanhtien'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
        else 
        {
            echo "Không tìm thấy hóa đơn cho khách hàng với mã: $Makh";
        }
    }
    mysqli_close($conn);
?>
</body>
</html>