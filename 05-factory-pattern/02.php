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

class BookController {
    public function createBook($infoBook) {
        switch ($infoBook['type']) {
            case 'programming':
                $book = new BookProgramming($infoBook['id'], $infoBook['name']);
                break;
            case 'design':
                $book = new BookDesign($infoBook['id'], $infoBook['name']);
                break;
            case 'english':
                $book = new BookEnglish($infoBook['id'], $infoBook['name']);
                break;
            default:
                $book = new BookProgramming($infoBook['id'], $infoBook['name']);
                break;
        }
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