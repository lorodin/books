<?php

namespace R2d2\Html\Models;

use R2d2\Html\Data\Interfaces\IRepository;

abstract class Model
{
    public function saveToDatabase(IRepository $repo) {
        $repo->save($this);
    }
}
