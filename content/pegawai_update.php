<?php
    if(!defined("INDEX")) die("");

    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $tipeFile = $_FILES['foto']['type'];
    $ukuranFile = $_FILES['foto']['size'];

    $error = "";
    if ($foto == "") {
        $query = mysqli_query($con, "UPDATE pegawai SET
            nama_pegawai = '$_POST[nama]',
            jenis_kelamin = '$_POST[jk]',
            tgl_lahir = '$_POST[tanggal]',
            id_jabatan = '$_POST[jabatan]',
            keterangan = '$_POST[keterangan]'
            WHERE id_pegawai='$_POST[id]'
        ");
    } else {
        if ($tipeFile != "image/jpeg" and $tipeFile != "image/jpg" and $tipeFile != "image/png") {
            $error = "Tipe file tidak didukung";
        } elseif($ukuranFile >= 8000000) {
            echo $ukuranFile;
            $error ="Ukuran file terlalu besar (lebih dari 8MB)";
        } else {
            $query = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai='$_POST[id]'");
            $data = mysqli_fetch_array($query);
            if(file_exists("./asset/img/$data[foto]")) unlink("./asset/img/$data[foto]");

            move_uploaded_file($lokasi, "./asset/img/". $foto);
            $query = mysqli_query($con, "UPDATE pegawai SET
                foto = '$foto',
                nama_pegawai = '$_POST[nama]',
                jenis_kelamin = '$_POST[jk]',
                tgl_lahir = '$_POST[tanggal]',
                id_jabatan = '$_POST[jabatan]',
                keterangan = '$_POST[keterangan]'
                WHERE id_pegawai='$_POST[id]'
            ");
        }
    }
    if ($error != "") {
        echo $error;
        echo "<meta http-equiv='refresh' content='2; url=?hal=pegawai_edit&id=$_POST[id]'>";
    } elseif($query) {
        echo "<script>alert('Data berhasil disimpan');</script>";
        echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
    } else {
        echo "Tidak dapat menyimpan data <br>";
        // echo mysqli_errno();
    }
?>