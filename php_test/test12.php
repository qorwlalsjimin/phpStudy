<?php
    
    $arr=array();
    $arr[0]="apple";
    $arr[1]="melon";
    $arr[2]="banana";

    //출력
    // for($i = 0; $i<3; $i++)
    //     echo $arr[$i]." ";

    // echo "<br>";

    // foreach($arr as $element){
    //     echo $element;
    // }

    $arr2=["mango", "grape", "peach"];
    // for($i = 0; $i<3; $i++)
    //     echo $arr2[$i]." ";
        
?>

<?php
    $array = array("apple"=>1000, "melon"=>2000, "banana"=>3000);

    echo $array["apple"];

    foreach($array as $element){
        echo $element." ";
    }

    // foreach(배열 as 변수){
    //     echo 변수;
    // }

    // <<배열
    // $배열이름 = array();
    // 인덱스: 0

    // <<연관배열(asociative 배열)
    // -key, value로 이루어짐
    // $배열이름=array("key=>value","key=>value"....);

    // foreach(배열이름 as 변수){
    //     실행될 코드
    // }
    // ===>배열의 원소들이 하나씩 알아서 변수에 대입된다.
    // -------------------------------------------------------
    // 함수(function)

    // function 함수이름(매개변수...){
    //     코드
    // }

    // 1.리턴타입X  매개변수X
    // public void add(){
    //     System.out.println(3+5);
    // }
    // add();

    // 2.리턴타입X  매개변수O
    // public void add(int i, int j){
    //     System.out.println(i+j);
    // }
    // add(3,5);

    // 3.리턴타입O  매개변수X
    // public int add(){
    //     return 3+5;
    // }
    // System.out.println(add());
    
    // 4.리턴타입O  매개변수O
    // public int add(int i, int j){
    //     return i+j;
    // }
    // System.out.println(add(3,5));

    function add(){
        echo 3+5;
    }
    add();




?>