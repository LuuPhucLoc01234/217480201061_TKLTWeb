<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chèn thông tin hóa đơn</title>
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
    $Mahd="";
    $Makh="";
    $Mahang="";
    $Soluong="";
    $Thanhtien="";

    //Lấy giá trị POST từ form vừa submit
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["txtMahd"]))
        {
            $Mahd = $_POST['txtMahd'];
        }

        if(isset($_POST["txtMakh"]))
        {
            $Makh = $_POST['txtMakh'];
        }

        if(isset($_POST["txtMahang"]))
        {
            $Mahang = $_POST['txtMahang'];
        }

        if(isset($_POST["txtSoluong"]))
        {
            $Soluong = $_POST['txtSoluong'];
        }

        if(isset($_POST["txtThanhtien"]))
        {
            $Thanhtien = $_POST['txtThanhtien'];
        }

        //Xử lý, Insert dữ liệu vào table HOADON
        $sql = "INSERT INTO hoadon VALUES ('$Mahd', '$Makh', '$Mahang', '$Soluong', '$Thanhtien')";
        if(mysqli_query($conn, $sql))
        {
            echo "<br><br>"."Thêm dữ liệu thành công";
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