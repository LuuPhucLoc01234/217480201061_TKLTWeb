<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
    <style>
        body {
            background-color: khaki;
        }
        h1 {
            font-size: 38px;
        }
        ul {
            font-size: 30px;
            font-weight: bold;
            color: red;
        }
        ul[type="square"] {
            font-size: 30px;
            font-weight: bold;
            color: darkblue;
            margin-left: 20px;
        }
        li {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
        $uploadDir = 'BoSuuTap/';
        echo "<h1>Upload success</h1>";
        foreach($_FILES['myfile']['error'] as $key=>$error)
        {
            if ($error == 0)
            {
                $tmp_name = $_FILES['myfile']['tmp_name'][$key];
                $name = $_FILES['myfile']['name'][$key];
                $uploadFile = $uploadDir . $name;
                if (move_uploaded_file($tmp_name, $uploadFile)) {
                    echo "<ul>";
                    echo "<li>File " . ($key+1) . ":</li>";
                    echo "<ul type='square'>";
                    echo "<li>Đường dẫn: " . $uploadFile . "</li>";
                    echo "<li>Loại file: " . $_FILES['myfile']['type'][$key] . "</li>";
                    echo "<li>Dung lượng: " . (int)$_FILES['myfile']['size'][$key] / 1024 . " KB</li>";
                    echo "</ul>";
                    echo "</ul>";
                } else {
                    echo "<p>Upload error!</p>";
                }
            }
        }
    ?>
</body>
</html>
