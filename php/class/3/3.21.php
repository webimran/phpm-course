<?php
    $fruits = array('a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'p'=>'plum', 'd'=>'dates', 'm'=>'mango');
    // shuffle($fruits);
    $key = array_rand($fruits);

    echo $fruits[$key];