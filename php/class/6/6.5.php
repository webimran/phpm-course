<?php
    $string = "Hello world, how are you";

    $string1 = explode(" ", $string);

    print_r($string1);
    $string2 = join(" ", $string1);
    print_r($string2);

    echo PHP_EOL;

    $string3 = strtok($string, ", ");

    while($string3 !== false){
        echo $string3."\n";
        $string3 = strtok(", ");
    }

    $string4 = preg_split("/, | /", $string);

    print_r($string4);