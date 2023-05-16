<?php

namespace App\Repositories;

use App\Models\Author;

class AuthorRepository implements AuthorRepositoryInterface
{
      protected $model;

      public function __construct(Author $model)
      {
          $this->model = $model;
      }

      public function getAll()
      {
            return  $this->model::all();
      }

      public function updateOrCreate($data)
      {
            return $this->model::updateOrCreate($data);
      }
}
