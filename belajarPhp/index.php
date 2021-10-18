<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php</title>
    <style>
        li{
            margin: 10px;
            padding: 10px;
        }
        p{
            font-weight: bold;
            color: blue;
        }
    </style>
</head>
<body>
<?php
    echo "Latihan PHP";
    $kata = "Selamt sore";
    echo ("<br>"), $kata;
?>
<ol type="I">
    <li>
        <p>Menampilkan data beserta nilainya dengan vardump</p>
        <?php 
            $kata = 'Selamat Malam';
            $angka = 210;
            $angkaFloat = 23.25;

            var_dump($kata);
            var_dump($angka);
            var_dump($angkaFloat);
        ?>
    </li>
    <li>
        <p>Konstanta</p>
        <?php
            define("SALAM", "Selamat Belajar PHP!");
            echo SALAM;
        ?>
    </li>
    <li>
        <p>Array</p>
        <?php
        // Cara 1
            $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
            echo "Bulan ke 3 adalah $bulan[2]";

            $profile = array("nama" => "Jafar", "alamat" => "Tangerang", "usia" => "25");
            echo "<br>Nama saya $profile[nama], Saya berasal dari $profile[alamat], Usia saya $profile[usia] tahun";
        
        // Cara 2
            $profil['nama'] = 'Syifa';
            $profil['alamat'] = 'Depok';
            $profil['usia'] = '25';

            echo '<br> Nama saya '.$profil['nama']. ', Saya berasal dari '.$profil['alamat'].', Usia saya '.$profil['usia'].' tahun';

        ?>
    </li>
    <li>
        <p>Statment Control</p>
        <ul>
            <li>Percabangan dengan if</li> <br>
            <?php
                $nilai = 80;
                if ($nilai >= 80) {
                    echo "Lulus <br>";
                }
                $nilai = 70;
                if ($nilai < 80) {
                    echo "Tidak lulus";
                }
            ?>
            <li>Percabangan dengan if else</li><br>
            <?php   
                $nilai = 80;
                if ($nilai >= 80) {
                    echo "Lulus <br>";
                } else {
                    echo "Tidak Lulus";
                }
            ?>
            <li>Percabangan dengan if elseif else</li><br>
            <?php
                $nilai = 70;
                if ($nilai >= 80) {
                    echo "Sangat baik";
                } elseif($nilai >= 60) {
                    echo "Cukup Baik";
                } else {
                    echo "Tidak Lulus";
                }
            ?>
            <li>Percabangan dengan Switch</li><br>
            <?php
                $kota = "Semarang";
                switch ($kota) {
                    case 'Bandung':
                        echo "Ibu Kota Jawa Barat";
                        break;
                    case 'Surabaya':
                        echo "Ibu Kota Jawa Timur";
                        break;
                    case 'Semarang':
                        echo "Ibu Kota Jawa Tengah";
                        break;
                    default:
                        echo "Ibu Kota Provinsi Lain";
                        break;
                }
            ?>
            <li>Perulangan dengan while</li><br>
            <?php
                $no = 1;
                while ($no <= 10) {
                    echo "Baris $no <br>";
                    $no++;
                }
            ?>
            <li>Perulangan dengan do while</li><br>
            <?php
                $no = 1;
                do {
                    echo " Baris $no <br>";
                    $no++;
                } while ($no <= 5);
            ?>
            <li>Perulangan dengan for</li><br>
            <?php
                for ($i=1; $i < 10 ; $i++) { 
                    echo "Baris $i <br>";
                }
            ?>
            <li>Perulangan forEach untuk Array</li><br>
            <?php
                $nama_hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
                echo "Nama Hari: ";
                foreach ($nama_hari as $hari) {
                    echo "$hari, ";
                }
                $profile = ["nama" => "Nabil", "alamat" => "Tegal", "usia" => "4"];
                foreach ($profile as $key => $value) {
                    echo "<br> $key : $value";
                }
            ?>
        </ul>
    </li>
    <li>
        <p>Function</p>
        <?php
            function ucap_salam() {
                echo "<br> Hallo apa kabar";
            }
            ucap_salam();
            echo "<br><b>Kita dapat menggunakannya lagi seperti berikut : </b>";
            ucap_salam();
        ?>
    </li>
    <li>
        <p>Function dengan argument</p>
        <?php
            function ucap_salam2($nama) {
                echo "Hallo, Apa kabar <b>$nama</b>?";
            }
            ucap_salam2("Jafar");
            echo "<br><b>Kita dapat menggunakannya lagi seperti berikut:</b><br>";
            ucap_salam2("Syifa");
        ?>
    </li>
    <li>
        <p>Function dengan nilai kembalian</p>
        <?php
            function hitung_luas($panjang, $lebar = 10) {
                $luas = $panjang * $lebar;
                return $luas;
            }
            echo "Luas Ruangan adalah " . hitung_luas(12);
            echo "<br><b>Kita dapat menggunakannya kembali seperti berikut:</b><br>";
            $p = 15;
            $l = 10;
            $luas = hitung_luas($p, $l);
            echo "Luas ruangan adalah $luas";
        ?>
    </li>
    <li>
        <p>Function untuk operasi string</p>
        <?php
            $text = "Saya senang belajar PHP";
            // substr
            echo substr($text, 1, 13) . " (hasil substr())<br>";
            echo substr($text, 12) . " (hasil substr())<br>";
        ?>
    </li>
    <li>
        <p>Function untuk operasi tanggal</p>
        <ul>
            <li>Function date</li><br>
            <?php
                echo date('Y/m/d');
                echo "<br>";
                echo date('d-m-Y H:i:s a');
                echo "<br>";
                echo date('d F Y');
            ?>
            <li>Function mktime</li><br>
            <?php
                $sekarang = mktime(12, 13, 40, date('m'), date('d'), date('Y'));
                echo "Sekarang tanggal ".date('d F Y', $sekarang);
                $bulanlalu = mktime(0,0,0, date('m')-1, date('d'), date('Y'));
                echo "<br> Satu bulan yang lalu adalah tanggal ".date('d F Y', $bulanlalu);
                $lusa = mktime(0,0,0, date('m'), date('d')+2, date('Y'));
                echo "<br> Lusa adalah tanggal ".date('d F Y', $lusa);
                $tahun = mktime(0,0,0, date('m'), date('d'), date('Y')-2);
                echo "<br> Dua tahun yang lalu adalah tanggal ".date('d F Y', $tahun);
            ?>
        </ul>
    </li>
    <li>
        <p>Funtion untuk operasi matematika</p>
        <?php
            // Menghasilkan angka positif dari sebuah angka
            echo abs(-200) . "<br>";
            // Menghasilkan nilai cosinus
            echo cos(60) . "<br>";
            // Mengkonversi angka biner ke desimal
            echo bindec(10001111011) . "<br>";
            // Pembulatan angka ke atas
            echo ceil(12.123) . "<br>";
            // Pembulatan angka ke bawah
            echo floor(12.923) . "<br>";
            // Membulatkan angka desimal
            echo round(12.123, 2) . "<br>";
            // Mengkonversi derajat ke radian
            echo deg2rad(90) . "<br>";
            // Memangkat bilangan pertama dengan bilangan kedua
            echo pow(4,2) . "<br>";
            // Menghasilkan akar kuadrat
            echo sqrt(16) . "<br>";
            // Menghasilkan angka secara acak
            echo rand(10, 1000) . "<br>";
            //Menghasilkan angka tertinggi dalam sebuah array
            echo max(10, 11, 17, 13) . "<br>";
            // Menghasilkan angka terendah dalam sebuah array
            echo min(10, 11, 17, 13) . "<br>";
        ?>
    </li>
    <li>
        <p>Function untuk penanganan file</p>
        <?php
            $myfile = fopen("hallo.txt", "w");
            $txt = "Hallo, \n";
            fwrite($myfile, $txt);
            $txt = "Saya sedang belajar PHP\n";
            fwrite($myfile, $txt);
            fclose($myfile);
        ?>
    </li>
    <li>
        <p>Variable Global</p>
        <?php
            $x = 75;
            $y = 25;
            function penambahan() {
                $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            }
            penambahan();
            echo $z;
        ?>
    </li>
    <li>
        <p>Variable $_SERVER</p>
        <?php
            // Menghasilkan nama file PHP yang berisi skrip tersebut
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            // Menghasilkan nama dari host server
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
            // Menghasilkan host header dari request
            echo $_SERVER['HTTP_HOST'];
            echo "<br>";
            // kaga tau variable apa ini
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br>";
            // Menghasilkan path dari skrip yang sedang berjalan
            echo $_SERVER['SCRIPT_NAME'];
        ?>
    </li>
</ol>
</body>
</html>