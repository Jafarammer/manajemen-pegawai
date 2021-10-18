<?php
    session_start();
    session_destroy();
    echo "<p>Anda telah logout!</p>";
    echo "<meta http-equiv='refresh' content='2;url=login.php'>";
?>