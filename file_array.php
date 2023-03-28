<?php
    //membuat array scalar(satu dimensi)
    $ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu'];

    foreach($ar_buah as $id => $buah){
        echo '<br> tampilan key '.$id;
    }
    echo '<hr>';

    foreach($ar_buah as $buah){
        echo '<br> Buah '.$buah;
    }
?>