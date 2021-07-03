<?php
    $numbers = range(40, 72);
    $random = mt_rand(0, 32);

    echo $random;

    $luck = $numbers[$random];
    echo "\n";
    if($luck % 2 == 0){
        echo "Head";
    }else{
        echo "Tail";
    }