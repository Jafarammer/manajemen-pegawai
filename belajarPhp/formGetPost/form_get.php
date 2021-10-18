<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form GET</title>
</head>
<body>
    <form method="get" action="#">
        <input type="text" name="kata">
        <input type="submit" value="Cari">
    </form>
    <?php
        if (isset($_GET['kata'])) {
            echo "Anda sedanng mencari kata <b>$_GET[kata]</b>";
        }
    ?>
</body>
</html>