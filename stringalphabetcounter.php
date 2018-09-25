<?php

// take a string and enumerate every char by the order from the alphabet

/*
A L A D I N 
1 5 2 3 4 6
*/

$abc = range('A', 'Z');
$chars = str_split('ALADIN');
$i = 0;

$counters = [];
foreach($abc as $l => $letter){
    foreach($chars as $c => $char){
        if($char == $letter){
            $counters[$c] = ++$i;
        }
    }
}
ksort($counters);
$foo = array_combine($counters, $chars);
print_r($foo);
