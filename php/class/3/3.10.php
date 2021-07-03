<?php

    // array_slice()

    $fruits = array(
        'apple',
        'banana',
        'orange',
        'plum',
        'dates',
        'mango'
    );

    $random = array(
        'a' => '01',
        'c' => '11',
        'd' => '21',
        'e' => '31',
        'f' => '41',
        '12' => '51',
        '13' => '61',
        'g' => '71'
    );

    // $someFruits = array_slice($fruits, 2);
    // $someFruits = array_slice($fruits, 2, 2);
    // $someFruits = array_slice($fruits, 2, -1);
    // $someFruits = array_slice($fruits, 2, -1, true);
    $randomData = array_slice($random, 2, -3, true);

    print_r($randomData);

