<?php
    $range = range(1, 50);
    $random = mt_rand(1, 50);

    // echo $random."\n";
    
    $luck = $range[$random];
    echo $luck."\n";

    if($luck % 2 == 0){
        echo "Head";
    }else{
        echo "Tell";
    }