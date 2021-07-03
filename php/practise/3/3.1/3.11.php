<?php
    $fruits = array(
        'apple',
        'banana',
        'orange',
        'plum',
        'dates',
        'mango'
    );

    $newFruits = array("jackfruit", "tamarind", "pineapple");

    $somefruit = array_splice($fruits, 1, -1, $newFruits);

    print_r($somefruit);
    print_r($fruits);