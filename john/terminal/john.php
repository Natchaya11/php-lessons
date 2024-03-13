<?php
    $a = 1; 
    $b = 2; 
    $c = 3;
    $a = $b + $c;
    $b = $a + $a;
    $a = $b + $c;
    $c = $a - $b;

    echo $a; // outputs : 2
    echo $b; // outputs : 1
    echo $c; // outputs : 1

?>

