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
        'a' => '01',
        'c' => '11',
        'd' => '21',
        'e' => '31',
        'f' => '41',
        '12' => '51',
        '13' => '61',
        'g' => '71'
    );
    print_r($fruits);
    
    $fruits = array_slice($fruits, 2);
    print_r($fruits);

    $random = array_slice($random, 2, -1, true);

    print_r($random);

