<?php
    $fruits = array(
        'apple',
        'banana',
        'orange',
        'plum',
        'dates',
        'mango'
    );

    $random = array(
        "a" => 01,
        "b" => 11,
        "c" => 21,
        "d" => 31,
        "e" => 41,
        "12" => 51,
        "f" => 61,
        "g" => 71
    );

    $f1 = array_slice($fruits, 1, 3 );
    $f2 = array_slice($fruits, 4, null, true );

    // $m  = array_merge($f1, $f2);
    // print_r($f1);
    // print_r($f2);
    // print_r($m);

    // $newFruits = $f1 + $f2;
    // print_r($newFruits);
    
    $r1 = array_slice($random, 0, 3, true);
    $r2 = array_slice($random, 6, null, true);
    $r3 = array("i"=> 45, "j"=> 60);

    $randomData = array_splice($random,2,2,array("i"=> 45, "j"=> 60));
    $randomDataCorrectWay = $r1+$r3+$r2;
    print_r($randomData);
    print_r($random);
    print_r($randomDataCorrectWay);
