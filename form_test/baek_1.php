<?php
    $filename = $_FILES['userfile']['name'];
    $filesize = $_FILES['userfile']['size'];
    $filetype = $_FILES['userfile']['type'];
    $filetmp = $_FILES['userfile']['tmp_name'];

    echo $filename."<br>";
    echo $filesize."<br>";
    echo $filetype."<br>";
    echo $filetmp."<br>";

    $upload_dir = "upload/";
    if(!is_dir($upload_dir))
        mkdir($upload_dir);

    $upload_file = $upload_dir.basename($_FILES['userfile']['name']);
    echo $upload_file;

    if(move_uploaded_file($_FILES['userfile']['tmp_name']), $upload_file)
        echo "업로드 성공";
    
?>  