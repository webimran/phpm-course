<?php
    $persons = array('Kamal', 'Jamal', 'Delowar', 'Imran', 'Maruf');
    $newPerson = array("Simran", "Ranee");
    $person = array_splice($persons, 0, 1, $newPerson);
    
    print_r($persons);
