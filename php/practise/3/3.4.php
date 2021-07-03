<?php
$vegatable = explode( ', ', 'brinjal, brocolli, carrot, capsicam' );

$vegatable = preg_split('/(, |,|-)/', 'brinjal, brocolli, carrot,capsicam-hello');
print_r($vegatable);

$vegatable = join(" ", $vegatable);
print_r($vegatable);


