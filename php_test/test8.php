<?php
    //문제7
    $sum = 0;
    for($i = 1; $i<=1000; $i++){
        if($i % 7 == 0 && $i % 9 == 0){
            echo $i." ";
            $sum += $i;
        }
    }

    echo "<br>합: ".$sum;
?>