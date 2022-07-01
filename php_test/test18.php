<?php
    //1. 파일 열기 (read.txt파일은 fp를 통해서만 접근 가능하다)
    $fp = fopen("data.txt", "r");

    //2. 파일 읽어오기 fgetc() fgets() fread() file_get_contents
    while($str = fgets($fp))
        echo $str;

    echo "<br><br>";
    echo file_get_contents("data.txt");

    //3. 파일 닫기
    fclose($fp);
?>