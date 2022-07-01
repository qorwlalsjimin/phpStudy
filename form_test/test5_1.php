<?php
    //사용자가 입력한 값 출력

    //uname에 들어있는 값을 가져와서 name에 대입
    $a = $_POST['uname'];
    echo "입력하신 이름은 ".$a."입니다<br>";
    
    $b = $_POST['uid'];
    echo "입력하신 아이디는 ".$b."입니다<br>";

    if($a=="park" && $b=="parkID")
        echo "로그인 성공";
    else if($a!="park" || $b!="parkID")
        echo "아이디나 비밀번호가 틀렸습니다";

?>