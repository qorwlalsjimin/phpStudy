<!-- is_dir(디렉토리): 디렉토리가 있는2지 없는지 여부
file_exitst(디렉토리): 파일이 있는지 없는지 여부
파일이랑 디렉토리랑 같은 말
-->

<?php
    $dir="./data"; // php_test/data
    if (is_dir($dir)) //data란 디렉토리가 있으면 있다 출력, 없으면 없다 출력
        echo "디렉토리 있다<br>";
    else
        echo "디렉토리 없다<br>";
?>

<?php
    $dir="./";
    if(is_dir($dir)) //현재 디렉토리 밑에 파일이 있으면 있다 출력, 없으면 없다 출력
        echo "파일 있다<br>";
    else
        echo "파일 없다<br>";
?>
