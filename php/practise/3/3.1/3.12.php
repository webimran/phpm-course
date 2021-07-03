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

    // $fruits1 = array_slice($fruits, 0, 2);
    // $fruits2 = array_slice($fruits, 5, null, true);
    // $newFruits = array_merge($fruits1, $fruits2 );
    // print_r($fruits1);
    // print_r($fruits2);
    // print_r($newFruits);    
    // $fruitsPlus = $fruits1 + $fruits2;
    // print_r($fruitsPlus);
    $random1 = array_slice($random, 0, 2, true);
    $random2 = array_slice($random, 5, null, true);
    $random3 = array('j' => '52', 'k' => '25');
    print_r($random1);
    print_r($random2);

    $fruitsSplice = array_splice($random, 2, 2, array('j' => '52', 'k' => '25'));
    $randomCorrectWay = $random1 + $random2 + $random3;
    print_r($fruitsSplice);
    print_r($randomCorrectWay);


