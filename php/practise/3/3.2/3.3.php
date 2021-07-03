<?php
    $foods = array(
        'vagetable' => 'brinjal, brocolli, carrot, capsicam',
        'fruits'    => 'orange, banana, apple',
        'drinks'    => 'water, milk'
    );

    foreach($foods as $food => $value){
        echo $food. "=>" . "$value";
    }

    $values = array_values($foods);

    print_r($values);
    $value = count($values);

    for($i=0; $i < $value; $i++){
        echo $values[$i]."\n";
    }

    $keys = array_keys($foods);

    print_r($keys);

    $key = count($keys);

    for($i=0; $i < $key; $i++){
        echo $foods[$keys[$i]]."\n";
    }



