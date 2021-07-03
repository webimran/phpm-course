<?php
    $person = array(
        'fname' => 'hello',
        'lname' => 'world'
    );

    print_r($person);
    unset($person['fname']);
    print_r($person);