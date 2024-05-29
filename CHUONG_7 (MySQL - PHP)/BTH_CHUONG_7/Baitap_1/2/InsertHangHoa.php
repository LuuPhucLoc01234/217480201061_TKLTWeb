<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chèn thông tin hàng hóa</title>
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
    $Mahang="";
    $Tenhang="";
    $MaNSX="";
    $NamSX="";
    $Gia="";

    //Lấy giá trị POST từ form vừa submit
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["txtMahang"]))
        {
            $Mahang = $_POST['txtMahang'];
        }

        if(isset($_POST["txtTenhang"]))
        {
            $Tenhang = $_POST['txtTenhang'];
        }

        if(isset($_POST["txtMaNSX"]))
        {
            $MaNSX = $_POST['txtMaNSX'];
        }

        if(isset($_POST["txtNamSX"]))
        {
            $NamSX = $_POST['txtNamSX'];
        }

        if(isset($_POST["txtGia"]))
        {
            $Gia = $_POST['txtGia'];
        }

        //Xử lý, Insert dữ liệu vào table HANGHOA
        $sql = "INSERT INTO hanghoa VALUES ('$Mahang', '$Tenhang', '$MaNSX', '$NamSX', '$Gia')";
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