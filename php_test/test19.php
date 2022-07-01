<?php
//1. 파일을 여는데 모드 체크해서 열어(write.txt)
    $fp = fopen("write.txt","w"); //write.txt를 따로 안 만들어놔도 가능 

    $str = "Marry has a cat";
//2. 파일에 $str를 쓴다.
    //fwrite($fp, $str);
    file_put_contents("write.txt",$str);

//3. 파일을 닫는다
    fclose($fp);

    echo "저장되었습니다.";
?>