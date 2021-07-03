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
    $someFruits = array_splice($fruits, 1, -3, $newFruits );

    print_r($someFruits);
    print_r($fruits);