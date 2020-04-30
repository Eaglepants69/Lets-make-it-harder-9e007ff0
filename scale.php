<?php
    $balans1 = 1;
    $balans2 = 2;
    $balans3 = array(1,2);

    $left = $balans1 - $balans2;
    
    if($left < 0){
        $positive = abs($left);
        $zoek = array_search($positive, $balans3);
        $gelijk = $positive + $zoek;
        if($zoek == null){
            echo "niet in balans";      
        }
        elseif($gelijk == $positive){
            echo "in balans";
        }
    }             
    if($left >= 0){
        $positive = abs($left);
        $zoek = array_search($positive, $balans3);
        $gelijk = $positive + $zoek;
        if($zoek == null){
            echo "niet in balans";      
        }
        elseif($gelijk == $positive){
            echo "in balans";
        }
    } 
?>