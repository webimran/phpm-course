<?php
    $filename = "/Users/Imran Hossain/Desktop/2020/php/class/7/f1.txt";
    // echo getcwd();
    if(is_readable($filename)){
        $fp = fopen($filename, "r");

        // $line = fgets($fp);
        // echo $line;

        while($line = fgets($fp)){
            echo $line;
        }
        // rewind($fp);
        fseek($fp, 6);
        while($line = fgets($fp, 5)){
            echo $line."-";
        }

        fclose($fp);

        $data = file($filename);

        print_r($data);

        echo PHP_EOL;

        $data = file_get_contents($filename);

        echo $data;
    }
