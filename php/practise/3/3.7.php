<?php
    $person = array(
        'fname' => 'hello',
        'lname' => 'world'
    );

   $newPerson = $person;
    $newPerson['lname'] = "Bangladesh";
   print_r($person);
   print_r($newPerson);

    function printCopy(&$person){
       $person['lname'] = 'Pluto';
       print_r($person);
    }

    printCopy($person);
    print_r($person);
