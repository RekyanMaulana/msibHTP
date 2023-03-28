<?php
    $b1 = ['code'=>'a1', 'buah'=>'apel', 'harga'=>25000, 'jml'=> 3];
    $b2 = ['code'=>'a2', 'buah'=>'anggur', 'harga'=>30000, 'jml'=> 3];
    $b3 = ['code'=>'a3', 'buah'=>'mangga', 'harga'=>20000, 'jml'=> 5];
    $b4 = ['code'=>'a4', 'buah'=>'pepaya', 'harga'=>35000, 'jml'=> 7];
    $b5 = ['code'=>'a5', 'buah'=>'jeruk', 'harga'=>15000, 'jml'=> 3];

    $buah = [$b1, $b2, $b3, $b4, $b5];
    $judul = ['No', 'Code', 'Buah', 'Harga', 'Jumlah'];

    //fungsi-fungsi sederhana
    $jumlah_data = count($buah);
    $jml_kg = array_column($buah, 'jml');
    $total_kg = array_sum($jml_kg);
    $harga_total = array_sum($jml_kg);
    $max_kg = max($jml_kg);
    $min_kg = min($jml_kg);
    $keterangan = [
        'Jumlah data'=>$jumlah_data,
        'Total Kg'=>$total_kg,
        'Jumlah tertinggi'=>$max_kg,
        'Jumlah terendah'=>$min_kg
    ]
?>

<table border="1" cellpadding="10px" width="100%">
    <thead>
        <tr>
            <?php
                foreach($judul as $j){
            ?>
            <th>
                <?= $j ?>
            </th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach($buah as $b){
                $warna = $no % 2 == 1 ? 'skyblue': 'yellow';
        ?>
        <tr bgcolor = "<?= $warna; ?>">
            <td><?= $no ?></td>
            <td><?= $b['code'] ?></td>
            <td><?= $b['buah'] ?></td>
            <td><?= $b['harga'] ?></td>
            <td><?= $b['jml'] ?></td>
        </tr>
        <?php
        $no++;
        }
        ?>
    </tbody>
    <tfoot>
        <?php
            foreach($keterangan as $ket => $hasil){
        ?>
        <tr>
            <th colspan="4"><?= $ket ?></th>
            <th><?= $hasil ?></th>
        </tr>
        <?php } ?>
    </tfoot>
</table>