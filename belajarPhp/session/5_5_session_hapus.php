<?php
    session_start();

    session_destroy();

    echo "Session telah dihapus, <a href='5_5_session_cek.php'> Cek session </a>";
?>