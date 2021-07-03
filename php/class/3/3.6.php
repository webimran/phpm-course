<?php
    $student = array(
        'fname' => 'Imaran',
        'lname' => 'Hossain',
        'age'   => '27',
        'roll'  => '01'
    );

    $student =  serialize($student);
    $student = unserialize($student);

    print_r($student);
    
    $student = json_encode($student);
    print_r($student);
    echo PHP_EOL;
    $student = json_decode($student, true);
    print_r($student);
    


   

