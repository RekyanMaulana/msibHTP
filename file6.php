<form method="GET">
    <label for="">Nama : </label><br>
    <input type="text" name="nama"><br>
    <label for="">Alamat : </label><br>
    <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="simpan" name="proses">
</form>

<?php
error_reporting(0);
    // memproses form
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $proses = $_GET['proses'];
    if (isset($proses)) {
        echo 'Nama : '.$nama.'<br> Alamat : '.$alamat;
    }
?>