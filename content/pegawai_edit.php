<?php
    if(!defined('INDEX')) die("");

    $query = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai = '$_GET[id]'");
    $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Pegawai</h2>
<form method="POST" action="?hal=pegawai_update" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id_pegawai']?>">
    <div class="form-group">
        <label for="foto">Foto</label>
        <div class="input">
            <input type="file" id="foto" name="foto">
            <img src="./asset/img/<?= $data['foto'] ?>" width="150">
        </div>
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" id="nama" name="nama" value="<?= $data['nama_pegawai'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <?php
            if($data['jenis_kelamin'] == "Pria") {
                $l = "checked";
                $p = "";
            } else {
                $l = "";
                $p = "checked";
            }
        ?>
        <input type="radio" id="jk" name="jk" value="Pria" <?= $l?>> Pria
        <input type="radio" id="jk" name="jk" value="Wanita" <?= $p?>> Wanita
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input">
            <input type="date" id="tanggal" name="tanggal" value="<?= $data['tgl_lahir'] ?>">
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
                        echo "<option value='$j[id_jabatan]'";
                        if($j['id_jabatan'] == $data['id_jabatan'])
                        echo "selected";
                        echo ">$j[nama_jabatan]</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <div class="input">
            <textarea name="keterangan" id="keterangan" style="width: 100%;" rows="5"><?= $data['keterangan'] ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset">
    </div>
</form>
