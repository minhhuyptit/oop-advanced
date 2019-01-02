<?php
abstract class Book {
    private $id;
    private $name;
    protected $type = null;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getType() {
        return $this->type;
    }
}

class BookProgramming extends Book {
    protected $type = 'programming';
}

class BookDesign extends Book {
    protected $type = 'design';
}

class BookEnglish extends Book {
    protected $type = 'english';
}

class BookFactory {
    public static function build($bookType, $idBook, $nameBook) {
        $className = "Book" . ucwords($bookType);
        if(class_exists($className)){
            $obj = new $className($idBook, $nameBook);
            return $obj;
        }
    }
}

class BookController {
    public function createBook($infoBook) {
        $book = BookFactory::build($infoBook['type'], $infoBook['id'], $infoBook['name']);
        return $book;
    }
}
// Nếu Website có nhiều loại sách thì cách này cũng mất khá nhiều switch nên ta sẽ qua 03.php làm bằng Factory Pattern
$bookController = new BookController();
$infoBook = $_GET;
$book = $bookController->createBook($infoBook);
echo "<pre>";
print_r($book);
echo "</pre>";
?>