<?php
    $id = $_POST['id'];
    $password = $_POST['password'];
    $passwrodCheck = $_POST['passwordCheck'];
    $name = $_POST['name'];
    $gender = $_POST['radio'];
    for($i = 0; $i<count($_POST['check']); $i++)
        $hobby = $_POST['check'][$i];
    $FirstNumber = $_POST['number'];
    $MiddleNumber = $_POST['MiddleNumber'];
    $LastNumber = $_POST['LastNumber'];
    $email_kind = $_POST['mail_kind'];
    $email = $_POST['email'];
    $selfIntroduce = $_POST['selfIntroduce'];


    if($password!=$passwrodCheck)
        echo "<script>alert('비밀번호가 일치하지 않습니다');history.go(-1);</script>";

    echo "아이디 : ".$id."<br>";
    echo "비밀번호 : ".$password."<br>";
    echo "비밀번호 확인 : ".$passwrodCheck."<br>";
    echo "이름 : ".$name."<br>";
    echo "성별 : ".$gender."<br>";
    echo "취미 : ";
    for($i = 0; $i<count($_POST['check']); $i++)
        echo $_POST['check'][$i];
    echo "<br>전화번호 : ".$FirstNumber."-".$MiddleNumber."-".$LastNumber."<br>";
    echo "이메일 : ".$email."@".$email_kind."<br>";
    echo "자기소개 : ".$selfIntroduce."<br>";

?>