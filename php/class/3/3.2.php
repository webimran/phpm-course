<?php
    // array_unshift();
    // array_push();

    // array_shift();.
    // array_pop(); 

    $students = array(
        'Mamun',
        'Kamal',
        'Imran',
        'Maruf',
        'Tarikul',
        'Ranee'
    );

    $students[4] = 'Delowar';
    $n = count($students);

    for($i=0;$i<$n;$i++){
        echo $students[$i]."\n";
    }
    echo PHP_EOL;

    $student = array_shift($students); // Removed fitrst array
    $student = array_pop($students); // Removed Last array
    $n = count($students);
    for($i=0;$i<$n;$i++){
        echo $students[$i]."\n";
    }
    echo PHP_EOL;

    $student = array_unshift($students, 'Ajimul'); // Added new first array on top
    $student = array_push($students, 'Muklesur'); // Added new last array on bottom
    $n = count($students);
    for($i=0;$i<$n;$i++){
        echo $students[$i]."\n";
    }

