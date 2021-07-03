<?php

    $foods = explode(', ', 'brinjal, brocolli, carrot, capsicam');
    
    print_r($foods);
    $foods = preg_split('/(, |,|-)/', 'brinjal, brocolli, carrot,capsicam-test');
    print_r($foods);

    $foods = join(', ', $foods);

    echo $foods;

