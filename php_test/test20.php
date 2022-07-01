<?php
    $fp = fopen("count.txt", "r");
    $num = fgets($fp);
    $count = (int)$num + 1;
    fclose($fp);

    $fp = fopen("count.txt", "w");
    fwrite($fp, $count);
    fclose($fp);
?>

<style>
    span{
        color: red;
    }
</style>

<h1>당신은 <span><?php echo $count; ?></span> 번째 방문자입니다.</h1>
<!--
    html안에 php를 삽입할 때는 <?php echo 코드 ?>한다.
    php안에 html을 삽입할 때는 echo "<h1><br>"; 이런식으로 쓴다.
-->