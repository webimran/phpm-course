<?php
    $string = "Hello World";
    echo $string[3];
    echo PHP_EOL;
    echo substr($string, 0, 5);
    echo PHP_EOL;
    echo substr($string, -5);
    echo PHP_EOL;

    $lenth = strlen($string);

    for($i=$lenth-1;$i>=0;$i--){
        echo $string[$i];
    }

    echo PHP_EOL;

    echo strrev($string);
