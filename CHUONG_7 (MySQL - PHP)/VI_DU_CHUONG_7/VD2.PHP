<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 2</title>
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
    $sql = "SELECT msv, hoten FROM danhsach";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<table>";
            echo "<tr>";
            echo "<th>MSV</th>";
            echo "<th>Họ tên</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['msv'] . "</td>";
            echo "<td>" . $row['hoten'] . "</td>";
            echo "</tr>";
            }
        echo "</table>";
    }
    mysqli_close($conn);
?>
</body>
</html>
