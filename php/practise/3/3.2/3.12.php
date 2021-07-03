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

    $fruit = array_slice($fruits, 0, 2);
    $fruit2 = array_slice($fruits, 3, null, true);
    print_r($fruit);
    print_r($fruit2);
    $fruit3 = array('j' => '52', 'k' => '25');
    $fruitMerage = array_merge($fruit, $fruit2, $fruit3);
    print_r($fruitMerage);

    $allFruits = $fruit + $fruit2 + $fruit3;
    print_r($allFruits);