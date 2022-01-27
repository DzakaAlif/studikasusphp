<HTml>
    <head>
        <title>Studi Kasus</title>
    </head>
    <body>
        <form method="get" action="JALAN.PHP">
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
        <p>
        <LABel>Alamat</LABel>
        <input type="text" name="alamat">
        <label>No. Orang Tua</label>
        <input type="text" name=no_ortu>
</p>
        <p>
         <label>Nama Ayah</label>
         <input type="text" name="ayah">
         <label>Nama Ibu</label> 
         <input type="text" name="ibu"><br/>  
        </p>
        <input type="submit" value="Daftar">        
</form>

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
    </body>
</HTml>