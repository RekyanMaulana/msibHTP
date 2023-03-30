<?php
require 'Bank.php';
//ciptakan object
$n1 = new Bank('001','Siti',30000000);
$n2 = new Bank('002','Ainun',40000000);
$n3 = new Bank('003','Nur',34000000);
$n4 = new Bank('004','Budi',56000000);
$n5 = new Bank('005','Habi',10000000);

$n1->ambil(2000000);
$n1->setor(5000000);
$n2->setor(4000000);
$dataNasabah = array($n1,$n2,$n3,$n4,$n5);
foreach($dataNasabah as $data){
    $data->cetak();
}
// $n1->cetak();
// $n2->cetak();
// $n3->cetak();
// $n4->cetak();
// $n5->cetak();

echo '<br> Jumlah Nasabah : '.Bank::$jml.' Orang';

?>