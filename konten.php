<?php
    if (!defined('INDEX')) die("");
    $halaman = ["home", "pgawai", "pegawai_tambah", "pegawai_insert", "pegawai_edit", "pegawai_update", "pegawai_hapus", "jabatan", "jabatan_tambah", "jabatan_insert", "jabatan_edit", "jabatan_update", "jabatan_hapus"];
    if(isset($_GET['hal'])) $hal = $_GET['hal'];
    else $hal = "home";
    foreach($halaman as $h) {
        if ($hal == $h) {
            include "content/$h.php";
            break;
        }
    }
?>