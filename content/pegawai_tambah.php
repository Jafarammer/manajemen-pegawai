<?php
    if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Pegawai</h2>

<form method="POST" action="?hal=pegawai_insert" enctype="multipart/form-data">
    <div class="form-group">
        <label for="foto">Foto</label>
        <div class="input">
            <input type="file" id="foto" name="foto">
        </div>
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" id="nama" name="nama">
        </div>
    </div>
    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <input type="radio" id="jk" name="jk" value="Pria"> Pria
        <input type="radio" id="jk" name="jk" value="Wanita"> Wanita
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input">
            <input type="date" id="tanggal" name="tanggal">
        </div>
    </div>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <div class="input">
            <select name="jabatan" id="jabatan">
                <option value=""> -Pilih Jabatan- </option>
                <?php
                    $queryJabatan = mysqli_query($con, "SELECT * FROM jabatan");
                    while ($j = mysqli_fetch_array($queryJabatan)) {
                        echo "<option value='$j[id_jabatan]'>$j[nama_jabatan]</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <div class="input">
            <textarea name="keterangan" id="keterangan" style="width: 100%;" rows="5"></textarea>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="submit" value="Batal" class="tombol reset">
    </div>

</form>