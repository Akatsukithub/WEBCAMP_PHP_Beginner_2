<?php

$i = 0;
$j = 1;

echo"{$i}\n{$j}\n";

while($k < 10000){
        
        $k = $i + $j;
        $i = $j;
        $j = $k;
        
        echo"{$k}\n";
}
