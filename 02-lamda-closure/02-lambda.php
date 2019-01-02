<?php
    function showHello(){
        echo "<h3>Hello Function Normal</h3>";
    }
    showHello();

    // Hàm Lambda nên dùng khi những hàm chỉ sử dụng duy nhất 1 lần
    $hello = function(){
        echo "<h3>Hello Function Anonymous</h3>";
    };
    $hello();

    $nameOrther = 'Akai';
    //Hàm Lambda có tham số
    $hello = function($name = 'Peter'){      //Lambda chỉ dùng được biến cục bộ nên ko in ra dx Akai
        echo "<h3>Hello ".$name." and ".$nameOrther."</h3>";    
    };
    $hello('Huy');

?>