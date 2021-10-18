<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form File</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="foto">
        <input type="submit" value="Upload">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $namaFile = $_FILES['foto']['name'];
            $lokasiFile = $_FILES['foto']['tmp_name'];

            if ($namaFile != "") {
                move_uploaded_file($lokasiFile, "file/". $namaFile);
                echo "<br><img src='file/$namaFile' width='200'>";
            }
        }
    ?>
</body>
</html>