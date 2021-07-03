<?php
    $veryOld = 0;
    $newOld  = 1;
    $new    = 1;

    for( $i=0; $i<10; $i++){
        echo $veryOld;
        $newOld = $new;
        $new = $newOld + $veryOld;
        $veryOld = $newOld;
        echo PHP_EOL;
    }

    echo PHP_EOL;
    $result = 1;
    for($i = 5; $i > 1; $i--){
        $result *= $i;
        echo $result;
        echo PHP_EOL;

    }

    echo $result;
    echo PHP_EOL;

    $x = 15;
    $y = 71;

    $result = $x <=> $y;

    if($result == 0){
        echo "zero";
    }elseif($result == 1){
        echo "One";
    }elseif($result == -1){
        echo "-One";
    }