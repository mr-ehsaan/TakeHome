<?php

namespace App\Repositories;
use Illuminate\Http\Request;

interface ArticleRepositoryInterface
{
    public function getAll(array $request);
    public function create(array $data);
    public function updateOrCreate(array $data);
}
