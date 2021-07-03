<?php
    $numbers = array(1,2,3,4,5,6,7,8,9,10);

    function square($n){
        printf("Square of %d is %d \n", $n, $n*$n);
    }
    
    array_walk($numbers, 'square');

    echo PHP_EOL;

    function cube($n){
        return $n*$n*$n;
        // printf("Square of %d is %d \n", $n, $n*$n*$n);
    }

    $newArray = array_map('cube', $numbers);

    print_r($newArray);

    function even($n){
        return $n%2==0;
    }

    $even = array_filter($numbers, 'even');

    print_r($even);

    function odd($n){
        return $n%2==1;
    }

    $odd = array_filter($numbers, 'odd');

    print_r($odd);

    $person = array('salam', 'kalam', 'sakib', 'salma', 'sumon', 'kodor', 'saju');

    function filterbys($person){
        return $person['0']== 's';
    }

    $filterbys = array_filter($person, 'filterbys');
    print_r($filterbys);







