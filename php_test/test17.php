<!--
1.파일열기 fopen()
    r:read = 불러오기 = 읽기
    w:write = 저장하다 = 쓰다
    a:append(추가)
2.작업
    읽어-fgetc/fgets/fread. 저장
    fwrite()
3.파일닫기 fclose()
-->

<?php
//1번
    $filename = "data.txt";
    $fp = fopen($filename, "r");
    
//2번
    while($c=fgetc($fp)){
        echo $c."<br>";
    }

//3번
    fclose($fp);
?>

<?php
    $filename = "data.txt";
    $fp = fopen($filename, "r");

    while($c=fgets($fp)){
        echo $c."<br>";
    }

    fclose($fp);
?>

<?php
    echo file_get_contents("data.txt");
?>