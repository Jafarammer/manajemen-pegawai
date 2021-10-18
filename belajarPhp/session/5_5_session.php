<?php
    session_start();

    $_SESSION['username'] = "Administrator";
    $_SESSION['password'] = "Rahasia";

    echo "Session on telah dibuat, <a href='5_5_session_cek.php'> Cek Session </a>";
?>