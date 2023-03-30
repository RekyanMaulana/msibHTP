<?php
require 'Pegawai.php';

$pegawai = new Pegawai('001','Andi','Manager','Islam','Menikah');

$ar_pegawai = [$pegawai];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}
?>