<?php

    $foods = array(
        'vagetable' => 'brinjal, brocolli, carrot, capsicam',
        'fruits'    => 'orange, banana, apple',
        'drinks'    => 'water, milk'
    );

    var_dump($foods);

    foreach($foods as $key => $value){
        echo $key . '='. $value ."\n";
    }

    echo PHP_EOL;
    
    $keys = array_keys($foods);
    $key = count($keys);
    
    for($i=0;  $i<$key; $i++){
        echo $foods[$keys[$i]]."\n";
    }
    
    echo PHP_EOL;
    echo "Value";
    echo PHP_EOL;

    $values = array_values($foods);

    $value = count($values);

    for($i=0;$i<$value; $i++){
        echo $values[$i]."\n";
    }
