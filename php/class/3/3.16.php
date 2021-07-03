<?php
    $numbers = array(1,2,3,4,5,6,7,8,9,10);

    function square($n){
        printf("Square of %d is %d \n", $n, $n*$n);
    }

    array_walk($numbers, 'square');

    function cube($n){
        return $n*$n*$n;
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

    function filterBys($person){
        return $person[0] == 's';
    }

    $newPerson = array_filter($person, 'filterBys');

    print_r($newPerson);