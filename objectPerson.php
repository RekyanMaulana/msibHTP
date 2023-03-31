<?php
    require_once 'dosen.php';
    require_once 'mahasiswa.php';
    require_once 'staff.php';

    $d1 = new Dosen('Budi', 'L', '111', 'M.Kom');
    $d2 = new Dosen('Andi', 'L', '112', 'M.Kom');
    $m1 = new Mahasiswa('Ali', 'L', '6', 'Teknik Informatika');
    $m2 = new Mahasiswa('Sri', 'P', '6', 'Teknik Informatika');
    $s1 = new Staff('Joko', 'L', '001', 'Teknisi', 4000000);
    $s2 = new Staff('Dian', 'P', '002', 'Admin', 6000000);

    $ar_data = [$d1, $d2, $m1, $m2, $s1, $s2];

    foreach($ar_data as $data){
        $data->cetak();
    }
?>