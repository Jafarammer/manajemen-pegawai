<?php
    session_start();
    if (!empty($_SESSION['username']) and !empty($_SESSION['password'])) {
        echo "Username: ".$_SESSION['username'];
        echo "<br> Password: ".$_SESSION['password'];
        echo "<br> <a href='5_5_session_hapus.php'> Hapus Session </a>";
    } else {
        echo "Session on telah dihapus";
        echo "<br> <a href='5_5_session.php'> Buat session </a>";
    }
?>