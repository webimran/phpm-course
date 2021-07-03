<?php
    $number = range(1, 20, 2);

    print_r($number);

    foreach(range(0, 50, 5) as $number){
        if($number > 0){
            echo $number."\n";
        }
    }