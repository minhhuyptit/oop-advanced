<?php

    namespace qqq;   //Nhưng nếu file này có 1 namespace và ta ko dùng use mà gọi trực tiếp  thì cần có thêm \xxx\Student
    use xxx\Student;    //Zo thẳng class Student mới khởi tạo đối tượng trong đây được

    //  Thực hành namspace với 
    require_once 'Zend/Student.php';
    require_once 'Magento/Student.php';

    class Teacher{
        public $student;

        public function __construct(){
            $this->student = new Student();
        }
    }

    $teacher = new Teacher();
    echo "<pre>";
    print_r($teacher);
    echo "</pre>";

?>