<?php
/**
 * Design Pattern: Singleton là Tạo ra 1 đối tượng cho 1 class thôi
 */

class Database{

    private static $instance;

    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new Database();
        }
        return self::$instance;
    }

    private function __construct(){
        // Block
    }

    private function __clone(){
        // Block
    }
}

// Thông thường nếu mỗi lần ta new Class thì sẽ có 1 danh sách các #Object nhưng với 
// Singleton Pattern thì 1 class luôn luôn chỉ có 1 Object tương ứng thôi
$db1 = Database::getInstance();
$db2 = Database::getInstance();

var_dump($db1);
echo "<br />";
var_dump($db2);


// Nhưng nếu người dùng vẫn muốn dùng hàm clone để copy ra 1 Object khác thì cách khắc phục ntn?
//Để khắc phục ko cho clone thì trong class ta nên tạo thêm method __clone và ở modified private
$db1 = Database::getInstance();
$db3 = clone $db1;  //clone là copy nhân bản thành 1 object khác nữa ý
var_dump($db1);
echo "<br />";
var_dump($db3);

?>