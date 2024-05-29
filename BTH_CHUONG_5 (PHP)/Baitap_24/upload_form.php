<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 24</title>
    <style>
        body {
            background-color: khaki;
        }
        h1 {
            font-size: 35px;
        }
        p {
            font-size: 28px;
            font-weight: bold;
            color: darkblue;
        }
        input[type="submit"] {
            font-size: 24px;
            font-weight: bold;
            width: 110px;
            height: 60px;
            border: 2px solid black;
            cursor: pointer;
            color: darkblue;
            background-color: orchid;
        }
        input[type="file"] {
            font-size: 26px;
            font-weight: bold;
            padding: 5px 15px;
        }
    </style>
</head>
<body>
    <h1>Upload Files</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>Files upload:</p>
        <p>File 1: <input type="file" name="myfile[]"></p><br>
        <p>File 2: <input type="file" name="myfile[]"></p><br>
        <p>File 3: <input type="file" name="myfile[]"></p><br>
        <input type="submit" name="up" value="Upload">
    </form>
</body>
</html>