<?php
    // sort();
    // asort();
    // arsort();
    // rsort();
    // ksort();
    // krsort();
    $fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
    sort($fruits);
    print_r($fruits);

    $numbers = array(11,55,20,88,100,206,45,28,64,462);
    sort($numbers);
    print_r($numbers);
    echo PHP_EOL;
    
    echo "Sort by String \n";
    $numbers = array(11,55,20,88,100,206,45,28,64,54,88,22,66,462);
    sort($numbers, SORT_STRING);
    print_r($numbers);

    // keep key 

    $fruits = array('a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'p'=>'plum', 'd'=>'dates', 'm'=>'mango');
    asort($fruits);
    print_r($fruits);
    
    $numbers = array(11,55,20,88,100,206,45,28,64,462);
    asort($numbers);
    print_r($numbers);

    for($i=0;$i<count($numbers);$i++){
        echo $numbers[$i]."\n";
    }
    echo PHP_EOL;

    foreach($numbers as $number){
        echo $number."\n";
    }
    echo PHP_EOL;
    $numbers = array(11,55,20,88,100,206,45,28,64,462);
    arsort($numbers);
    print_r($numbers);


    foreach($numbers as $number){
        echo $number."\n";
    }
    echo PHP_EOL;  
    $numbers = array(11,55,20,88,100,206,45,28,64,462);
    rsort($numbers);
    print_r($numbers);


    foreach($numbers as $number){
        echo $number."\n";
    }
    echo PHP_EOL;
    // Key sort
    $fruits = array('a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'p'=>'plum', 'd'=>'dates', 'm'=>'mango');
    ksort($fruits);
    print_r($fruits);

    foreach($fruits as $fruit){
        echo $fruit."\n";
    }
    echo PHP_EOL;
    // Key r sort
    $fruits = array('a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'p'=>'plum', 'd'=>'dates', 'm'=>'mango');
    krsort($fruits);
    print_r($fruits);

    foreach($fruits as $fruit){
        echo $fruit."\n";
    }

    $random = array('apple', 'Apple', 'banana', 'Banana', 'orange', 'Orange', 'plum', 'Plum');
    sort($random, SORT_STRING | SORT_FLAG_CASE);
    print_r($random);


   

   