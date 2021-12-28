<?php

namespace R2d2\Html\Data;

use R2d2\Html\Data\Interfaces\IRepository;
use R2d2\Html\Models\Book;

class BooksRepository implements IRepository
{
    private $books = [];

    public function __construct()
    {
        $this->books[] = new Book(1, "Dog", "120", "Comady", "1", 1941);
        $this->books[] = new Book(2, "Cat", "121", "Drama", "2", 1965);
        $this->books[] = new Book(3, "Mouse", "122", "Hui znaet", "3", 1955);
        $this->books[] = new Book(4, "Bird", "123", "Hui znaet 2", "4", 1934);
        $this->books[] = new Book(5, "Snake", "124", "Poesia", "5", 1945);
    }

    public function getById(int $id)
    {
        foreach ($this->books as $book) {
            /** @var Book $book */
            if ($book->getId() == $id) {
                return $book;
            }
        }

        return null;
    }

    public function save($object)
    {
        /** @var Book $object */
        $found = false;
        foreach ($this->books as $index => $book) {
            if ($book->getId() == $object->getId()) {
                $this->books[$index] = $object;
                $found = true;
            }
        }
        if (!$found) {
            $this->books[] = $object;
        }
    }

    public function print()
    {
        print_r($this->books);
    }
}
