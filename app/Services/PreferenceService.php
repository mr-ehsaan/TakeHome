<?php

namespace App\Services;

use App\Repositories\PreferenceRepositoryInterface;

class PreferenceService
{
      protected $preferenceRepository;

      public function __construct(PreferenceRepositoryInterface $preferenceRepository)
      {
            $this->preferenceRepository = $preferenceRepository;
      }


      public function getAll()
      {
            return $this->preferenceRepository->getAll();
      }

      public function updateOrCreate($user,$data)
      {
            return $this->preferenceRepository->updateOrCreate($user,$data);
      }

}
