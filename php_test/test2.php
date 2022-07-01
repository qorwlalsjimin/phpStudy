<?php
//문제 1
    $numbers = array(1,2,3,4,5);

    $eSum = 0;
    $oSum = 0;

    for($i = 0; $i<5; $i++){
        if($numbers[$i] % 2 == 0){
            $eSum += $numbers[$i];
        }
        else{
            $oSum += $numbers[$i];
        }
    }

    echo "짝수의 합 = ".$eSum.", 홀수의 합 = ".$oSum;
?>