<?php
// Decorator Pattern cho phép thêm method or properies của 1 đối tượng khi chương trình đang thực thi

/**
 * Ví dụ giải quyết bài toán: Khi thông báo lỗi xảy ra thì ghi vào
 * + Developer(localhost): File, Email, Web, Database
 * + Publish(hosting)    : File, Email
 */

class Developer{
    public function logFile($msg){
        echo "<h3>Error on File: {$msg}</h3>";
    }

    public function logEmail($msg){
        echo "<h3>Error on Email: {$msg}</h3>";
    }

    public function logWeb($msg){
        echo "<h3>Error on Web: {$msg}</h3>";
    }
}

class Publish{
    public function logFile($msg){
        echo "<h3>Error on File: {$msg}</h3>";
    }
}

$developer = new Developer();
$developer->logFile('saving');
$developer->logEmail('saving');
$developer->logWeb('saving');

//Nhưng để làm được ví dụ như đề bài thì ta cần tạo 2 2 đối tượng từ 2 class nên để giải
//quyết vấn đề bây giờ ta qua file 02.php dùng Decorator Pattern để giải quyết


?>