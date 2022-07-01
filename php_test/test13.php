<?php
    function add1(){
        echo (10+20+30)." ";
    }

    function add2($i, $j, $k){
        echo ($i+$j+$k)." ";
    }

    function add3(){
        return (10+20+30)." ";
    }

    function add4($i, $j, $k){
        return ($i+$j+$k)." ";
    }

    add1();
    add2(10,20,30);
    echo add3();
    echo add4(10,20,30);
?>