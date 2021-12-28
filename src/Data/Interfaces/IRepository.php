<?php

namespace R2d2\Html\Data\Interfaces;

interface IRepository
{
    public function getById(int $id);

    public function save($object);

    public function print();
}
