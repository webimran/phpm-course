<?php
    $fruits = array('a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'p'=>'plum', 'd'=>'dates', 'm'=>'mango');
    $numbers = array(11,55,20,88,100,206,45,28,64,54,88,22,66,462);

    if(in_array(55, $numbers)){
        echo "55 is found \n";
    }

    $search = array_search("20", $numbers); // integar check true 

    echo "$search is found \n";

    if(key_exists("c", $fruits)){
        echo "C key found";
    }