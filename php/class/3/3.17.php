<?php
    $numbers = array(1,2,3,4,5,6,7,8,9,10); 

    function sum($oldValue=0, $newValue=0){
        return $oldValue+$newValue;
    }

    $sum = array_reduce($numbers, 'sum');

    echo $sum;

    echo PHP_EOL;
    function sumEven($oldValue=0, $newValue=0){
        if($newValue%2 == 0){
            return $oldValue+$newValue;
        }
        return $oldValue;
    }
    $sumEven = array_reduce($numbers, 'sumEven');
    
    echo $sumEven;
    
    echo PHP_EOL;
    function sumOdd($oldValue=0, $newValue=0){
        if($newValue%2 == 1){
            return $oldValue+$newValue;
        }
        return $oldValue;
    }
    $sumOdd = array_reduce($numbers, 'sumOdd');

    echo $sumOdd;

