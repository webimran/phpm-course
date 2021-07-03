<?php
$year = 2020;

if ( $year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0 ) {
    echo "{$year} is a leaf year";
} elseif ( $year % 4 == 0 && $year % 100 == 0 ) {
    echo "{$year} is not a leaf year";
} elseif ( $year % 4 == 0 ) {
    echo "{$year} is a leaf year";
} else {
    echo "{$year} is not leaf year";
}

echo PHP_EOL;

if ( $year % 4 == 0 && ( $year % 100 != 0 || $year % 400 == 0 ) ) {
    echo "{$year} is a leaf year";
} else {
    echo "{$year} is not leaf year";
}
