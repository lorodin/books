<?php

namespace R2d2\Html\Data;

use R2d2\Html\Data\Interfaces\IRepository;
use R2d2\Html\Models\BookerMan;

class BookerManRepository implements IRepository
{
    protected $bookerMans = [];

    public function __construct()
    {
        $this->bookerMans[] = new BookerMan(1, "Vasiliy Igorevich");
        $this->bookerMans[] = new BookerMan(2, "Oleg Ivanovich");
    }

    public function getById(int $id): ?BookerMan
    {
        foreach ($this->bookerMans as $bookerMan) {
            /** @var BookerMan $bookerMan */
            if ($bookerMan->getId() == $id) {
                return $bookerMan;
            }
        }

        return null;
    }

    public function save($object)
    {
        // TODO: Implement save() method.
    }

    public function print()
    {
        print_r($this->bookerMans);
    }
}
