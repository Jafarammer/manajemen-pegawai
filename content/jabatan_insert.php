<?php
    if(!defined('INDEX')) die(" ");
    $query = mysqli_query($con, "INSERT INTO jabatan SET nama_jabatan = '$_POST[nama]'");

    if ($query) {
        echo "<script>alert('Data berhasil disimpan');</script>";
        echo "<meta http-equiv='refresh' content='1;url=?hal=jabatan'>";
    } else {
        echo "Tidak dapat menyimpan data<br>";
        // echo mysqli_error();
    }
?>