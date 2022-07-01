<!-- 
<<디렉토리 관련 함수
1.opendir(): 디렉토리 열기
2.readdir(): 디렉토리 읽기
3.closedir(): 디렉토리 닫기
4.scandir(): 디렉토리 내에 있는 파일과 디렉토리 목록을 배열로 반환

<<파일 관련함수
1.fopen(): 파일 열기
2.fclose(): 파일 닫기
3.파일내용읽기(파일불러오기): fgetc() / fgets(), fread()
4.파일내용쓰기(저장하기): fwrite()
*file_get_contents() / file_put_contents() 
-->

<?php
    $dir = opendir("."); //현재 디렉토리 열기
    while($files = readdir($dir)){
        echo $files."<br>";
    }

    closedir();
?>
<!-- 
<?php
    $dir = opendir("C:\Bitnami\wampstack-8.1.5-0\apache2"); //현재 디렉토리 열기
    while($files = readdir($dir)){
        echo $files."<br>";
    }

    closedir();
?> -->
