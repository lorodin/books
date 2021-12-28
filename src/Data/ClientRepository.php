<?php

namespace R2d2\Html\Data;

use R2d2\Html\Data\Interfaces\IRepository;
use R2d2\Html\Models\Client;

class ClientRepository implements IRepository
{
    private $clients = [];

    public function __construct() {
        $this->clients[] = new Client(1, "Igor", new \DateTime(), "Moscow", "+123123213");
        $this->clients[] = new Client(2, "Olga", new \DateTime(), "Sanct-Piterburg", "+3213123");
        $this->clients[] = new Client(3, "Oleg", new \DateTime(), "Vladivostok", "+3213123");
        $this->clients[] = new Client(4, "Vladimer", new \DateTime(), "Khabarovsk", "+3213123");
    }

    public function getById(int $id)
    {
        foreach ($this->clients as $client) {
            if ($client->getId() == $id) {
                return $client;
            }
        }

        return null;
    }

    public function save($object)
    {
        /** @var Client $object */
        $found = false;
        foreach ($this->clients as $index => $client) {
            if ($client->getId() == $object->getId()) {
                $this->clients[$index] = $object;
                $found = true;
            }
        }
        if (!$found) {
            $this->clients[] = $object;
        }
    }

    public function print()
    {
        print_r($this->clients);
    }
}
