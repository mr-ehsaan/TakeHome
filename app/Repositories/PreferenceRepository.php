<?php

namespace App\Repositories;

use App\Models\Preference;

class PreferenceRepository implements PreferenceRepositoryInterface
{
      protected $model;

      public function __construct(Preference $model)
      {
          $this->model = $model;
      }

      public function getAll()
      {
            return  $this->model::with('source','category','author')->where('user_id', auth()->user()->id)->get();
      }

      public function updateOrCreate($user,$data)
      {
            return $this->model::updateOrCreate($user,$data);
      }
}
