<?php
    $person = array(
        'fname' => 'hello',
        'lname' => 'world'
    );

   $new_person = $person;

   $new_person['lname'] = 'Pluto';

   print_r($new_person);
   print_r($person);

    function printCopy(&$person){
       $person['fname'] = 'Changed';
       print_r($person);
    }

    printCopy($person);

    print_r($person);
