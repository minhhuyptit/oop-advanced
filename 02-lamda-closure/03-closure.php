<?php
    $name = 'Akai';
    $birthday = '21/06/1997';

    // //Cách thứ 1
    // $showHello = function() use ($name, $birthday){
    //     echo 'My name is '. $name . ' and my birthday: ' . $birthday;
    // };
    // $showHello();

    // //Cách thứ 2
    // $showHello = function() use ($name){
    //     $name = strtoupper($name);
    //     echo 'My name is '. $name . '<br />'; //Ở đây sẽ in hoa nhưng khi ra khỏi thì sẽ trở về trạng thái nguyên thủy
    // };
    // $showHello();
    // echo $name;


    //Cách thứ 3 Muốn thay đổi luôn biến bên ngoài thì dùng tham chiếu
    $name1 = 'Shuichi';
    $showHello = function() use (&$name1){
        $name1 = strtoupper($name1);
        echo 'My name is '. $name1 . '<br />'; //Ở đây sẽ in hoa nhưng khi ra khỏi thì sẽ trở về trạng thái nguyên thủy
    };
    $showHello();
    echo $name1;

?>