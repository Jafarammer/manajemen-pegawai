<?php
    if(!defined('INDEX')) die(" ");

    $query = mysqli_query($con, "DELETE FROM jabatan WHERE id_jabatan='$_GET[id]'");
    if ($query) {
        echo "Data Berhasil dihapus";
        echo "<meta http-equiv='refresh' content='1;url=?hal=jabatan'>";
    } else {
        echo "Tidak dapat menghapus data <br>";
        // echo mysqli_error();
    }
?>