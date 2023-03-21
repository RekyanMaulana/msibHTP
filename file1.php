<?php
echo 'Dokumen PHP saya ada di '.$_SERVER['DOCUMENT_ROOT'];
//ini pemanggilan di PHP
echo 'Hello world';

//belajar variabel
$namaSiswa = "Rekyan";
$umur = 20;
$berat_badan = 50;
$pekerjaan = "Programmer";

echo '<hr>';
echo 'Nama Siswa : '.$namaSiswa;
echo '<br> Umur : '.$umur;
echo '<br> Berat Badan : '.$berat_badan;
echo '<br> Pekerjaan : '.$pekerjaan;
?>

<!-- ini adalah pemanggilan dengan menggunakan document HTML -->
<hr>
Nama Siswa : <?= $namaSiswa ?>
<br> Umur : <?= $umur ?>
<br> Berat Badan : <?= $berat_badan ?>
<br> Pekerjaan : <?= $pekerjaan ?>
