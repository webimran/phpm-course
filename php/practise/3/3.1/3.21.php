<?php   
    $fruits = array('a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'p'=>'plum', 'd'=>'dates', 'm'=>'mango');
    $key = array_rand($fruits);

    echo $fruits[$key];