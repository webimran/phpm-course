<?php
    $string = "The quick brown Brown fox Fox jumps over fox the lazy dog";

    $string1 = str_replace("brown", "red", $string);
    echo $string1;
    echo PHP_EOL;
    $string2 = str_ireplace("brown", "red", $string); //Cas sensetive
    echo $string2;
    echo PHP_EOL;
    $string2 = str_ireplace("brown", "red", $string, $count); //Count
    echo $string2;
    echo PHP_EOL;
    echo "Total Replace: {$count}";
    echo PHP_EOL;
    $string2 = str_ireplace(array("brown", "fox", "dog"), array("red", "cat", "hen"), $string, $count); //multipple 
    echo $string2;
    echo PHP_EOL;
    echo "Total Replace: {$count}";
    echo PHP_EOL;