<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD</title>
    <style>
        body {
            background-color: aquamarine;
        }
        h1 {
            font-size: 52px;
        }
        p {
            font-size: 42px;
            font-weight: bold;
            color: maroon;
        }
    </style>
</head>
<body>
    <?php 
        if (isset($_POST['up']) && isset($_FILES['fileUpload']))
        {
            $uploadDir = 'Tailieu/';
            $uploadFile = $uploadDir . basename($_FILES['fileUpload']['name']);
            if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $uploadFile)) 
            {
                echo "<h1>Upload success</h1><br<br>";
                echo '<p>Đường dẫn: ' . $uploadFile . '</p><br>';
                echo '<p>Loại file: ' . $_FILES['fileUpload']['type'] . '</p><br>';
                echo '<p>Dung lượng: ' . (int)$_FILES['fileUpload']['size'] / 1024 . ' KB</p>';
            } 
            else 
            {
                echo "Upload error!";
            }
        }
    ?>
</body>
</html>