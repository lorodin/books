<?php

namespace R2d2\Html\Controllers;

use R2d2\Html\Data\BookerManRepository;
use R2d2\Html\Data\BooksRepository;
use R2d2\Html\Data\ClientRepository;
use R2d2\Html\Factories\RepositoryFactory;
use R2d2\Html\Models\Book;
use R2d2\Html\Models\Client;

class BooksController
{
    private $factory;

    public function __construct(RepositoryFactory $factory) {
        $this->factory = $factory;
    }

    public function getBookToClient($idBookerMan, $idBook, $idClient) {
        $booksRepository = $this->factory->getRepository(BooksRepository::class);
        $bookerMansRepository = $this->factory->getRepository(BookerManRepository::class);
        $clientsRepository = $this->factory->getRepository(ClientRepository::class);

        $book = $booksRepository->getById($idBook);
        $bookerMan = $bookerMansRepository->getById($idBookerMan);
        /** @var Client $client */
        $client = $clientsRepository->getById($idClient);

        $client->updateAddress("London");

        $client->saveToDatabase($clientsRepository);
    }

    // Метод-действие по обновлению года издания книги
    public function updateBookYear($id, $year){
        $booksRepository = $this->factory->getRepository(BooksRepository::class);
        /** @var Book $book */
        $book = $booksRepository->getById($id);
        $book->updateYear($year);
        $book->saveToDatabase($booksRepository);
    }
}
