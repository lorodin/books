<?php

namespace R2d2\Html\Factories;

use R2d2\Html\Data\BookerManRepository;
use R2d2\Html\Data\BooksRepository;
use R2d2\Html\Data\ClientRepository;
use R2d2\Html\Data\Interfaces\IRepository;

class RepositoryFactory
{
    public $repositories = [];

    public function __construct()
    {
        $this->repositories = [
          BookerManRepository::class => new BookerManRepository(),
          BooksRepository::class => new BooksRepository(),
          ClientRepository::class => new ClientRepository()
        ];
    }

    public function getRepository(string $repository): ?IRepository
    {
        if (isset($this->repositories[$repository])) {
            return $this->repositories[$repository];
        }

        return null;
    }
}
