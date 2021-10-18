<?php
    $batas = time() + 30;
    setcookie("Kunjungan terakhir", date('H:i:s'), $batas);
    echo "COOKIE telah dibuat, buka file 5_6_cookie_cek.php sebelum dan setelah 30 detik";
?>