<?php
    $number = range(0, 10);

    print_r($number);

    foreach(range(0, 20, 2) as $number){
        if($number > 0){
            echo $number."\n";
        }

    }