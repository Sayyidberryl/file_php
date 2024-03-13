<?php
// menangkap data nama dengan method post
$nama = $_POST['nama'];
// menangkap data usia dengan method post
$askol = $_POST['askol'];
$tele = $_POST['tele'];
$kelamin = $_POST['kelamin'];

// menampilkan data nama
echo "Biodata pendaftaran Anda : ";
echo "<br/>";
echo "Nama anda adalah " . $nama;
echo "<br/>";
// menampilkan data usia
echo "Asal sekolah anda adalah " . $askol;
echo "<br/>";
echo "Gender anda " . $kelamin;
echo "<br/>";
echo "Nomor telephone anda adalah " . $tele;
?>