<?php

$items = ['d','f','e','s','x','c','a','w','b','k'];

function get_input($upper = FALSE) {
    $result = trim(fgets(STDIN));
    return $upper ? strtoupper($result) : $result;
}

function sort_menu($array) {

        echo '(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered : ';

        $input = get_input(true);

        switch ($input) {
            case 'A':
                sort($array);
                break;
            case 'Z':
                rsort($array);
                break;
            case 'O':
                ksort($array);
                break;
            case 'R':
                krsort($array);
                break;
        }
        
        print_r($array);
        return $array;
}

sort_menu($items);








?>