<?php
    $fruits = ['apple', 'mango', 'lemon', 'Banana', 'pineapple'];

    function fruits($fruits, $selectedValue ){
        foreach($fruits as $fruit){
            $selected = '';
            if(in_array($fruit, $selectedValue)){
                $selected = ' selected';
            }
            printf("<option value='%s' %s>%s</option>\n", $fruit, $selected, ucwords($fruit));
        }
    }