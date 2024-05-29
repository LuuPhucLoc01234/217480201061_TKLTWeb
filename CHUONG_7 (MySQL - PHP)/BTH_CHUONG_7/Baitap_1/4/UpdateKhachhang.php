<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin khách hàng</title>
</head>
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
    $SDT="";
    $Makh="";

    //Lấy giá trị POST từ form vừa submit
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["txtMakh"]))
        {
            $Makh = $_POST['txtMakh'];
        }

        if(isset($_POST["txtSDT"]))
        {
            $SDT = $_POST['txtSDT'];
        }

        //Xử lý, Update dữ liệu trong table KHACHHANG
        $sql = "UPDATE khachhang SET dienthoai='$SDT' WHERE makh='$Makh'";
        if(mysqli_query($conn, $sql))
        {
            echo "<br><br>"."Cập nhật dữ liệu thành công";
        }
        else
        {
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>
</body>
</html>