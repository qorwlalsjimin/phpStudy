<?php
    $score = 78;

    if($score >= 90)
        echo "A";
    else if($score >= 80)
        echo "B";
    else if($score >= 70)
        echo "C";
    else if($score >= 60)
        echo "D";
    else if($score >= 50)
        echo "F";

    echo "<br>";

    switch((int)($score/10)){
        case 10:
        case 9:
            echo "A";
            break;
        case 8:
            echo "B";
            break;
        case 7:
            echo "C";
            break;
        case 6:
            echo "D";
            break;
        default:
            echo "F";
            break;
    }
?>