<?php
    function sum($x, $y, int ...$n):int{
        $result = $x + $y;

        for($i=0; $i<count($n); $i++ ){
            $result += $n[$i];
        }

        return $result;
    }

    echo sum(1,3,5,5,6,50,68,5);