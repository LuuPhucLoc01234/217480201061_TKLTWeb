<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
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
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn)
    {
        die("Connection failed: ".mysqli_connect_error());
    }
    echo "Connected succsessfully";
    mysqli_close($conn);
?>
</body>
</html>
