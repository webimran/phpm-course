<?php
    $string = "The quick brown fox jumps over fox the lazy dog";
    $string1 = strpos($string, "fox");
    $string2 = stripos($string, "Fox"); //Case sesetive 
    $string3 = strripos($string, "Fox"); //reverse 
    echo $string1;
    echo PHP_EOL;
    echo $string2;
    echo PHP_EOL;
    echo $string3;
    echo PHP_EOL;

    if($string1 !== false){
        echo "World is found \n";
    }else{
        echo "World is not found \n";
    }