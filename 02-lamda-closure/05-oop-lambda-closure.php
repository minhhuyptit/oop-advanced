<?php
    class Student{
        private $name;
        private $birthday;

        public function __construct(){
            $this->name     = 'AKai Shuichi';
            $this->birthday = '21/06/1997';
        }

        public function showInfo($greeting){
            $result = function () use ($greeting){
                echo "$greeting, My name is ".$this->name." My birthday: ". $this->birthday . "<br />";
            };
            $result();
        }

        public function showHello($greeting){   
            //Nếu method không dùng bất cứ thuộc tính nào của class thì ta nên dùng staic => tốc độ nhanh hơn
            $result = static function () use ($greeting){
                echo $greeting;
            };
            $result();
        }

        public function __invoke(){
            echo "<h3>".__METHOD__."</h3>";
        }

    }

    $student = new Student();
    $student->showInfo('Hello');
    $student->showInfo('Hi');

    //Dùng method static tốc độ nhanh hơn
    $student->showHello('Xin chào');


    // Để gọi được Object như 1 hàm thì trong class cần có hàm __invoke();
    $student();
?>