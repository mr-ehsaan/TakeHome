<?php

namespace App\Repositories;

interface AuthorRepositoryInterface
{
    public function getAll();
    public function updateOrCreate(array $data);
}
