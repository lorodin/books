<?php

namespace R2d2\Html\Models;

use DateTime;
use R2d2\Html\Data\Interfaces\IRepository;

class Client extends Model
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $fio;

    /**
     * @var DateTime
     */
    protected $dateb;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $phone;

    public function __construct($id, $fio, $dateb, $address, $phone){
        $this->fio = $fio;
        $this->id = $id;
        $this->address = $address;
        $this->dateb = $dateb;
        $this->phone = $phone;
    }


    public function updateAddress($address) {
        $this->address = $address;
    }

    public function getId()
    {
        return $this->id;
    }
}
