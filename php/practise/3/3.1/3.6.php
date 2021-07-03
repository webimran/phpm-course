<?php
    $foods = array(
        'vagetable' => 'brinjal, brocolli, carrot, capsicam',
        'fruits'    => 'orange, banana, apple',
        'drinks'    => 'water, milk'
    );

    echo serialize($foods);

    echo PHP_EOL;
    
    $serialize = serialize($foods);
    
    $serialize = unserialize($serialize);
    
    print_r($serialize);
    echo PHP_EOL;
    
    echo json_encode($foods);
    echo PHP_EOL;
    
    $jsnd = json_encode($foods);
    $jsnd = json_decode($jsnd, true);
    print_r($jsnd);

