<?php
    $vegatable = explode(', ', 'brinjal, brocolli, carrot,capsicam');
    var_dump($vegatable);
    
    echo PHP_EOL;
    $vegatable = preg_split('/(, |,)/', 'brinjal, brocolli, carrot,capsicam');

    var_dump($vegatable);

    $vegatables = join(', ', $vegatable);

    echo $vegatables;



    