<?php
    $numbers = array(1,2,3,4,5,6,7,8,9,10); 

    function reduce($oldvalue =0, $newValue=0){
        return $oldvalue + $newValue;
    }

    $sum = array_reduce($numbers, "reduce");

    echo $sum;