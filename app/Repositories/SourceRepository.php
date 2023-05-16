<?php

namespace App\Repositories;

use App\Models\Source;

class SourceRepository implements SourceRepositoryInterface
{
      protected $model;

      public function __construct(Source $model)
      {
          $this->model = $model;
      }
      public function getAll()
      {
            return $this->model->all();
      }

      public function findByName($name)
      {
            return $this->model->whereName($name)->first();
      }
      
      public function updateOrCreate($data)
      {
        $this->model::updateOrCreate($data);
      }

}
