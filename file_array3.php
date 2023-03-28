<?php
    $m1 = ['NIM'=>'001', 'nama'=>'Andi', 'nilai'=>80];
    $m2 = ['NIM'=>'002', 'nama'=>'Ardi', 'nilai'=>54];
    $m3 = ['NIM'=>'003', 'nama'=>'Budi', 'nilai'=>76];
    $m4 = ['NIM'=>'004', 'nama'=>'Bila', 'nilai'=>87];
    $m5 = ['NIM'=>'005', 'nama'=>'Cika', 'nilai'=>78];
    $m6 = ['NIM'=>'006', 'nama'=>'Dika', 'nilai'=>58];
    $m7 = ['NIM'=>'007', 'nama'=>'Fifi', 'nilai'=>90];
    $m8 = ['NIM'=>'008', 'nama'=>'Heri', 'nilai'=>79];

    $mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8];
    $ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
?>

<table border="1px" width="100%">
    <thead>
        <tr>
            <?php
            foreach($ar_judul as $judul){
            ?>
            <th><?= $judul ?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach($mahasiswa as $mhs){
                $ket = ($mhs['nilai']>= 60) ? 'Lulus' : 'Tidak lulus';

                //grade
                if($mhs ['nilai']>= 80 && $mhs['nilai']<= 100) $grade = 'A';
                else if ($mhs['nilai']>= 75 && $mhs['nilai'] <80) $grade = 'B';
                else if ($mhs['nilai']>= 60 && $mhs['nilai'] <75) $grade = 'C';
                else if ($mhs['nilai']>= 30 && $mhs['nilai'] <60) $grade = 'D';
                else if ($mhs['nilai']>= 0 && $mhs['nilai'] <30) $grade = 'E';
                else $grade = '';
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $mhs['NIM'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['nilai'] ?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
        </tr>
        <?php $no++; } ?>
    </tbody>
</table>