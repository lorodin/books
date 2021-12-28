<?php

namespace R2d2\Html\Models;

use R2d2\Html\Data\Interfaces\IRepository;

class BookerMan extends Model
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $fio;

    public function __construct($id, $fio) {
        $this->id = $id;
        $this->fio = $fio;
    }

    public function getId() {
        return $this->id;
    }

    public function getFio() {
        return $this->fio;
    }
}
