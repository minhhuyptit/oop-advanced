<?php
    $x = 'y';
    $$x = 'z';  //tương đương với $y nên bên dưới ta gọi echo $y sẽ có kết quả = z
    echo $x . '<br />';
    echo $$x . '<br />';
    echo $y . '<br />';


    function showHello(){
         echo "<h3>".__METHOD__."</h3>";
    }
    $function = 'showHello';
    $function();

    class Student{
        public function showInfo(){
            echo "<h3>".__METHOD__."</h3>";
        }
    }

    $class  = 'Student';
    $method = 'showInfo';

    $student = new $class();
    $student->$method();

?>