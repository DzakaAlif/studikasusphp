<?php

$nama=$_GET['nama'];
$kelamin=$_GET['kelamin'];
$sekolah=$_GET['sekolah'];
$No=$_GET['No'];

echo "<p>Selamat <b>$nama</b>, Pendaftaran Berhasil</p>";
echo "Biodata Anda";
echo "<hr/>";
echo "Nama : ". $nama;
echo "<br/>";
echo "Jenis Kelamin : " . $kelamin;
echo "<br/>";
echo "Asal Sekolah : " . $sekolah;
echo "<br/>";
echo "No. Telp : " . $No;
echo "<br/>";

?>