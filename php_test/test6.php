<?php
    //문제5
    $eSum = 0;
    $oSum = 0;
    for($i = 1; $i<=30; $i++){
        if($i%2==0){
           $eSum += $i;
        }
        else{
            $oSum += $i;
        }
    }

    echo "짝수 합 : ".$eSum.", 홀수 합 : ".$oSum;
?>