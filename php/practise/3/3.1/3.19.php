<?php

    $numbre = range(0, 50, 7);

    print_r($numbre);

    foreach(range(0, 50, 11) as $numbre){
        if($numbre > 0){
            echo $numbre."\n";
        }
    }