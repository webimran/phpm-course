<?php
    $persons = array('Kamal', 'Jamal', 'Delowar', 'Imran', 'Maruf');

    print_r($persons);
    
    $persons['2'] = 'Kodor';
    print_r($persons); 
    
    
    $person = array_unshift($persons, 'Ajimul');
    print_r($persons); 
    $person = array_push($persons, 'Anower');
    print_r($persons); 
    $person = array_pop($persons);
   // $person = array_shift($persons);
    print_r($persons); 