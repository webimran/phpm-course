<?php
    function displayKey($key){
        printf("value='%s'", $key);
    }

    function scrambledData($orginalData, $key){
        $orginalKey    = 'abcdefghijklmnopqrstuvwxyz1234567890';
        $data           = '';
        $lenth  = strlen($orginalData);        
        for($i=0; $i<$lenth;$i++){
            $currentCar = $orginalData[$i];
            $position = strpos($orginalKey, $currentCar);
            if($position !== false){
                $data .= $key[$position];
            }else{
                $data .= $currentCar;
            }
        }

        return $data;
    }
    function decodeData($orginalData, $key){
        $orginalKey    = 'abcdefghijklmnopqrstuvwxyz1234567890';
        $data           = '';
        $lenth  = strlen($orginalData);        
        for($i=0; $i<$lenth;$i++){
            $currentCar = $orginalData[$i];
            $position = strpos($key, $currentCar);
            if($position !== false){
                $data .= $orginalKey[$position];
            }else{
                $data .= $currentCar;
            }
        }

        return $data;
    }