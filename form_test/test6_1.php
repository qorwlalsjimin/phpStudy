<?php
    for($i = 0 ; $i<count($_POST['fruit']); $i++){
        $a = $_POST['fruit'][$i];
        echo $a."<br>";
    }

    $gen = $_POST['gender'];
    echo "성별: ".$gen."<br>";

    $area = $_POST['sel'];
    echo "지역: ".$area;
?>