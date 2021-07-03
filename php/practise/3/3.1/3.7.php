<?php
    $person = array(
        'fname' => 'Imran',
        'lname' => 'Hossain'
    );

    $newPerson = $person;

    $newPerson['lname'] = 'Hasmi';

    print_r($person);
    print_r($newPerson);

    function printCopy(&$person){
        $person['lname'] = 'Hasmi';
        print_r($person);
    }

    printCopy($person);
    print_r($person);