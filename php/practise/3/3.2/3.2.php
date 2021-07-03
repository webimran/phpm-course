<?php
    $person = array('Kamal', 'Jamal', 'Delowar', 'Imran', 'Maruf');

    print_r($person);
    
    $person['1'] = "Simran";

    print_r($person);

    array_unshift($person, "NooRanee");
    array_push($person, "Moon");
    array_push($person, "Pluto");
    array_shift($person);
    array_pop($person);
    print_r($person);