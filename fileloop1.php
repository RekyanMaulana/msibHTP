<?php
    //jika tidak menggunaakan looping
    echo 'bilangan 1';
    echo 'bilangan 2';
    echo '<hr>';

    //looping menggunakan for
    for($x=1; $x<=5; $x++){
        echo '<br> Bilangan '.$x;
    }
    echo '<hr>';

    for($y=5; $y>=1; $y--){
        echo '<br> Bilangan '.$y;
    }
    echo '<hr>';

    //looping menggunakan while
    $a=1;
    while($a <= 5){
        echo '<br> Bilangan '.$a;
        $a++;
    }
    echo '<hr>';

    $b=5;
    while($b >= 1){
        echo '<br> Bilangan '.$b;
        $b--;
    }
    echo '<hr>';

    //looping menggunakan do while
    $i=1;
    do{
        echo '<br> Bilangan'.$i;
        $i++;
    }
    while($i <= 10);
?>