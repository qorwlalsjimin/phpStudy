<?php
    $filename = $_FILES['userfile']['name'];
    $filesize = $_FILES['userfile']['size'];
    $filetype = $_FILES['userfile']['type'];
    $fileodd = $_FILES['userfile']['tmp_name'];

    echo "파일이름 : ".$filename;
    echo "<br>파일크기 : ".$filesize;
    echo "<br>파일타입 : ".$filetype;
    echo "<br>파일저장이름 : ".$fileodd;

    $uploads_dir = 'uploads/';
    //$uploads_dir이 없으면 파일을 만들어라
    if(!is_dir($uploads_dir)){
        mkdir($uploads_dir); //make
    }

    $upload_fil = $uploads_dir.basename($_FILES['userfile']['name']);
    echo $upload_file;

    if(move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file)){
        echo "<br>업로드 성공!";
    }
    else{
        echo "<br>업로드 실패";
    }
?>  