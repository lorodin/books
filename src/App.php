<?php

namespace R2d2\Html;

use R2d2\Html\Controllers\BooksController;
use R2d2\Html\Data\BooksRepository;
use R2d2\Html\Factories\RepositoryFactory;
use R2d2\Html\Models\BookerMan;

// 1. Создать объект фабрики репозиториев
$new = new RepositoryFactory();

// 2. Создать BooksController с этой фабрикой
$controller = new BooksController($new);

// 3. Обновить год книги
$controller->updateBookYear(3,1986);

// 4. Вызывать print у BooksRepository
$gud = $new->getRepository(BooksRepository::class);
$gud->print();
