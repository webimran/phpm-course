<?php
    $fruits = array('a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'p'=>'plum', 'd'=>'dates', 'm'=>'mango');
    $numbers = array(11,55,20,88,100,206,45);

    if(in_array(55, $numbers)){
        echo "55 is found";
    }

    $search = array_search("20", $numbers);
    echo PHP_EOL;
    echo "$search is found";
    
    echo PHP_EOL;
    if(key_exists("c", $fruits)){
        echo "c key is found";
    }