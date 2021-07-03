<?php
    $numbers1   = array(1,4,3,66,54,7,23,1,2);
    $numbers2   = array(88,3,21,44,3,28,1,2,7);

    $friuts1    = array("a"=>"apple","d"=>"banana","c"=>"lemon");
    $fruits2    = array("d"=>"pineapple","b"=>"banana","g"=>"grapes","c"=>"lemon");

    $common = array_intersect($numbers1, $numbers2);
    print_r($common);
    $common1 = array_intersect($friuts1, $fruits2);
    print_r($common1);

    $common2 = array_intersect_assoc($friuts1, $fruits2);
    print_r($common2);
    
    $diff = array_diff($numbers1, $numbers2);
    print_r($diff);
    $diff2 = array_diff_assoc($friuts1, $fruits2);
    print_r($diff2);


