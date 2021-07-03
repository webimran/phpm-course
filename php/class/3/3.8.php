<?php
    $person = array(
        'fname' => 'Imran',
        'lname' => 'Hossain'
    );

    print_r($person);
    unset($person['lname']);
    
    print_r($person);