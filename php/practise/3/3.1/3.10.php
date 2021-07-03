<?php
    $persons = array('Kamal', 'Jamal', 'Delowar', 'Imran', 'Maruf');

    $person = array_slice($persons, 1, -1);

    print_r($person);