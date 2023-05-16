<?php

namespace App\Repositories;

interface PreferenceRepositoryInterface
{
    public function getAll();
    public function updateOrCreate(array $user,array $data);
    
}
