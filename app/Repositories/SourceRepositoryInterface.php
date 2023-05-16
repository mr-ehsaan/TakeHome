<?php

namespace App\Repositories;

interface SourceRepositoryInterface
{
    public function getAll();
    public function findByName($name);
    public function updateOrCreate(array $data);

}
