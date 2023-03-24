<?php
    $nama = "Rekyan";
    $totalbelanja = 300000;
    $keterangan = "";

    if($totalbelanja> 100000){
        $keterangan = "Selamat $nama, anda dapat hadiah";
    }else {
        $keterangan = "Terimakasih $nama sudah berbelanja";
    }
?>

Nama Pelanggan : <?= $nama ?>
<br> Total Belanja : <?= $totalbelanja ?>
<br> Keterangan : <?= $keterangan ?>