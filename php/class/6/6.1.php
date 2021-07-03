<?php 
    $name = "Imran Hossain";

    echo "My Name is {$name}";
    echo PHP_EOL;

$heredoc = <<<EOD 
Hello Bangladesh
My name is {$name} \n
EOD;

$nulldock = <<<'EOD' 
Hello Bangladesh
My name is {$name} \n
EOD;