<?php

namespace R2d2\Html\Models;

use R2d2\Html\Data\Interfaces\IRepository;

class Book extends Model
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $pages;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $serial;

    /**
     * @var int
     */
    protected $year;

    public function __construct($id, $name, $pages, $type, $serial, $year)
    {
        $this->id = $id;
        $this->name = $name;
        $this->pages = $pages;
        $this->year = $year;
        $this->serial = $serial;
        $this->type = $type;
    }

    public function getId()
    {
        return $this->id;
    }

    // Метод по обновлению года
    public function updateYear($year){
        $this->year = $year;
    }
}
