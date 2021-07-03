<?php
    $person = array(
        'fname' => 'hello',
        'lname' => 'world'
    );

    $newPerson = $person;
    $newPerson['lname'] = 'pluto';
    print_r($person);
    print_r($newPerson);
    // code by value
    // deer copy

    // $newPerson = &$person;
    // $newPerson['lname'] = 'pluto';
    // print_r($person);
    // print_r($newPerson);

    // copy by reference
    // Shallow copy

    function printCopy(&$person){
        $person['fname'] .=' changed';
        print_r($person);
    }

    printCopy($person);
    print_r($person);


