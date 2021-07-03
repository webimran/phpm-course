<?php
    $foods = array(
        'vagetable' => 'brinjal, brocolli, carrot, capsicam',
        'fruits'    => 'orange, banana, apple',
        'drinks'    => 'water, milk'
    );

    foreach($foods as $key => $value){
        echo $key ."=>" . $value."\n";
    }

    $key = array_keys($foods);
    print_r($key);
    $n = count($key);
    for($i=0; $i<$n; $i++){
        echo $foods[$key[$i]]."\n";
    }

    $value = array_values($foods);
    print_r($value);
    $n = count($value);

    for($i=0; $i<$n; $i++){
        echo $value[$i]."\n";
    }