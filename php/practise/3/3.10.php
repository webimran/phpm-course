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

   $fruit = array_slice($fruits, 2, -2);
   
   print_r($fruits);
   print_r($fruit);
