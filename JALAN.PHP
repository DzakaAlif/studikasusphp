<?php

$nama=$_GET['nama'];
$kelamin=$_GET['kelamin'];
$sekolah=$_GET['sekolah'];
$No=$_GET['No'];
$alamat=$_GET['alamat'];
$no_ortu=$_GET['no_ortu'];
$ayah=$_GET['ayah'];
$ibu=$_GET['ibu'];

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
echo "Alamat : " . $alamat;
echo "<br/>";
echo "No. Orang Tua : " . $no_ortu;
echo "<br/>";
echo "Nama Ayah : " . $ayah;
echo "<br/>";
echo "Nama Ibu : " . $ibu;
echo "<br/>";

?>