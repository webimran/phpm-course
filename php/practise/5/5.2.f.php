<?php
    function displayKey($key){
        printf("value='%s'", $key);
    }
    function scrambledData($orginalData, $key){
        $orginalkey    = 'abcdefghijklmnopqrstuvwxyz1234567890';
        $data          = '';
        $lenth         = strlen($orginalData);
        for($i=0;$i<$lenth;$i++){
            $curentcar  = $orginalData[$i];
            $postion    = strpos($orginalkey, $curentcar);
            if($postion !== false){
                $data .= $key[$postion];
            }else{
                $data .= $curentcar;
            }
        }

        return $data;
    }
    function decodeData($orginalData, $key){
        $orginalkey    = 'abcdefghijklmnopqrstuvwxyz1234567890';
        $data          = '';
        $lenth         = strlen($orginalData);
        for($i=0;$i<$lenth;$i++){
            $curentcar  = $orginalData[$i];
            $postion    = strpos($key, $curentcar);
            if($postion !== false){
                $data .= $orginalkey[$postion];
            }else{
                $data .= $curentcar;
            }
        }

        return $data;
    }