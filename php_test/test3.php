<?php
    //문제2
    $cnt = 0;
    for($i=1; $i<=100; $i++){
        if($i%4===0){
            echo $i." ";
            $cnt++;
        }
        if($cnt % 8 ==0){
            echo "<br>";
        }
    }
?>