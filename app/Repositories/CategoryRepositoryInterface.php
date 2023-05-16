<?php

namespace App\Repositories;

interface CategoryRepositoryInterface
{
    public function getAll();
    public function updateOrCreate(array $data);
    public function findByName($name);
    
}
