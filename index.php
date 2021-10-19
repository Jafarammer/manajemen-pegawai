<?php
    session_start();
    ob_start();

    include "library/config.php";
    if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
        echo "<p align='center'>Anda harus login terlebih dahulu!</p>";
        echo "<meta http-equiv='refresh' content='2;url=login.php'>";
    } else {
        define('INDEX', true);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Home</title>
</head>
<body>
    <header>
        Aplikasi Manajemen Pegawai
    </header>
    <div class="container">
        <aside>
            <ul class="menu">
                <li> <a href="?hal=home" class="aktif">Dashboard</a> </li>
                <li> <a href="?hal=pegawai">Data Pegawai</a> </li>
                <li> <a href="?hal=jabatan">Data Jabatan</a> </li>
                <li> <a href="logout.php">Keluar</a> </li>
            </ul>
        </aside>
        <section class="main">
            <?php
                include "konten.php";
            ?>
        </section>
    </div>
    <footer>
        Copyright &copy; Jafarammer
    </footer>


    <script src="asset/js/main.js"></script>
</body>
</html>