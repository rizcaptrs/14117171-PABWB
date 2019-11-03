<?php
    function swap (&$j, &$k){
        $l = $j;
        $j = $k;
        $k = $l;

        return 0;
        
    }

    $l = 0;
    $j = 5;
    $k = 7;
        echo "nilai sebelum diswap </br>";
        echo "A = 5 </br>";
        echo "B = 7 </br>";

    swap ($j, $k);
    echo "nilai sesudah diswap </br>";
    echo "A = $j </br>";
    echo "B = $k </br>";

?>