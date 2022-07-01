<?php
    echo "첫번째 php입니다<br>\n";
    //1부터 10까지 더한 합 출력

    $sum = 0;
    for($i = 1; $i<=10; $i++){
        $sum += $i;
    }
    echo "<h1><font color='red'>1부터 10까지의 합은 </font>".$sum."입니다";
?>