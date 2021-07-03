<?php 
    $string = "Imran Hossain 01955049496 webimran8@gmail.com";

    $string1 = sscanf($string, "%s %s %11s %s");
    print_r($string1);
    echo PHP_EOL;
    $string2 = sscanf($string, "%s %s %11s %s", $fname, $lname, $mobile, $email);
    echo $email;
    echo PHP_EOL;

    $color = "#FF2F44";

    sscanf($color, "#%2x%2x%2x", $red, $green, $blue);

    echo $red;