<?php
    //문제3
    $cnt = 0;
    $sum = 0;

    for($i = 100; $i<=999; $i++){
        if($i % 7 == 0){
            $cnt++;
            $sum += $i;
        }
    }

    echo "갯수 : ".$cnt.", 합 : ".$sum;
?>