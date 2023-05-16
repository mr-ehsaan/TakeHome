<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
      protected $model;

      public function __construct(Category $model)
      {
          $this->model = $model;
      }
      
      public function getAll()
      {
            return $this->model->all();
      }

      public function updateOrCreate($data)
      {
            return $this->model::updateOrCreate($data);
      }

      public function findByName($name)
      {
            return $this->model::whereName($name)->first();  
      }
}
