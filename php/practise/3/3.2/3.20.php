<?php
    $number = range(0, 100);
    $random = mt_rand(1, 100);

    $luck = $number[$random];
    echo $luck;
    echo PHP_EOL;
    if($luck%2==0){
        echo "Tell";
    }else{
        echo "Hell";
    }