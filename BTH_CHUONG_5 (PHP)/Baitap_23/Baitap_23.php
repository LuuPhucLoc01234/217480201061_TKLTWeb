<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 23</title>
    <style>
        body {
            background-color: aquamarine;
        }
        h1 {
            font-size: 45px;
        }
        p {
            font-size: 34px;
            font-weight: bold;
            color: red;
        }
        input[type="submit"] {
            font-size: 26px;
            font-weight: bold;
            width: 120px;
            height: 70px;
            border: 2px solid black;
            cursor: pointer;
            color: darkblue;
            background-color: orchid;
            margin-left: 28px;
        }
        input[type="file"] {
            font-size: 34px;
            font-weight: bold;
            padding: 5px 15px;
        }
    </style>
</head>
<body>
    <h1>Upload File</h1>
    <form action="UPLOAD.php" method="post" enctype="multipart/form-data">
        <p>File upload:</p>
        <p><input type="file" name="fileUpload" value=""></p>
        <p><input type="submit" name="up" value="Upload"></p>
    </form>
</body>
</html>
