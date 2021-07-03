<?php
    function displayKey($key){
        printf("value='%s'", $key);
    }

    function scrambledData($orginalData, $key){
        $orginalKey    = 'abcdefghijklmnopqrstuvwxyz1234567890';
        $data          = '';
        $lenth         = strlen($orginalData);
        for($i=0;$i<$lenth;$i++){
            $curenCar = $orginalData[$i];
            $postion  = strpos($orginalKey, $curenCar);
            if($postion !== FALSE){
                $data .= $key[$postion];
            }else{
                $data .= $curenCar;
            }
        }
        return $data;
    }
    function decodeData($orginalData, $key){
        $orginalKey    = 'abcdefghijklmnopqrstuvwxyz1234567890';
        $data          = '';
        $lenth         = strlen($orginalData);
        for($i=0;$i<$lenth;$i++){
            $curenCar = $orginalData[$i];
            $postion  = strpos($key, $curenCar);
            if($postion !== FALSE){
                $data .= $orginalKey[$postion];
            }else{
                $data .= $curenCar;
            }
        }
        return $data;
    }