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

$book = new BookProgramming(15, 'Lập trình C++'); 
echo $book->getId();
echo $book->getName();

?>
