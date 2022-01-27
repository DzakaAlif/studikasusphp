<HTml>
    <head>
        <title>Studi Kasus</title>
    </head>
    <body>
        <form method="get" action="INDEX.PHP">
        <label>Nama Siswa</label>
        <input type="text" name="nama">

        <label>Jenis Kelamin</label>
        <select name="kelamin">
        <option value="L">L</option>
        <option value="P">P</option>
        </select></br>

        <p>
        <label>Asal Sekolah</label>
        <input type="text" name="sekolah">
        <label>No. Telepon</label>

        <input type="text" name="No">
</p>
        <input type="submit" value="Daftar">
</form>

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
    </body>
</HTml>