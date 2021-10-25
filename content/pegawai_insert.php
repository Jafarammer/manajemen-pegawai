<?php
    if(!defined('INDEX')) die("");

    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $tipeFile = $_FILES['foto']['type'];
    $ukuranFile = $_FILES['foto']['size'];
    
    $error = "";
    if ($foto == "") {
        $query = mysqli_query($con, "INSERT INTO pegawai SET 
            nama_pegawai = '$_POST[nama]',
            jenis_kelamin = '$_POST[jk]',
            tgl_lahir = '$_POST[tanggal]',
            id_jabatan = '$_POST[jabatan]',
            keterangan = '$_POST[keterangan]'
        ");
    } else {
        if ($tipeFile != "image/jpeg" and $tipeFile != "image/jpg" and $tipeFile != "image/png") {
            $error = "Tipe file tidak didukung";
        } elseif($ukuranFile >= 8000000) {
            echo $ukuranFile;
            $error = "Ukuran file terlalu besar (lebih dari 8MB)";
        } else {
            move_uploaded_file($lokasi, "./asset/img/".$foto);
            $query = mysqli_query($con, "INSERT INTO pegawai SET 
                foto = '$foto',
                nama_pegawai = '$_POST[nama]',
                jenis_kelamin = '$_POST[jk]',
                tgl_lahir = '$_POST[tanggal]',
                id_jabatan = '$_POST[jabatan]',
                keterangan = '$_POST[keterangan]'
            ");
        }
    }
    if ($error != "") {
        echo $error;
        echo "<mete http-equiv='refresh' content='2; url=?hal=pegawai_tambah'>";
    } elseif($query) {
        echo "<script>alert('Data Berhasil disimpan');</script>";
        echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
    } else {
        echo "Tidak dapat menyimpan data<br>";
        // echo mysqli_error();
    }
?>