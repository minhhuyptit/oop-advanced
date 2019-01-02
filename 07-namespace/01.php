<?php
//  Thực hành namspace với class
    require_once 'Zend/Student.php';
    require_once 'Magento/Student.php';

    $student = new xxx\Student;    //Không cần () cũng được
    echo "<pre>";
    print_r($student);
    echo "</pre>";

    $student = new yyy\zzz\Student();
    echo "<pre>";
    print_r($student);
    echo "</pre>";

?>