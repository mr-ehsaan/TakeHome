<?php

namespace App\Services;

use App\Repositories\SourceRepositoryInterface;

class SourceService
{
      protected $sourceRepository;

      public function __construct(SourceRepositoryInterface $sourceRepository)
      {
            $this->sourceRepository = $sourceRepository;
      }


      public function getAll()
      {
            return $this->sourceRepository->getAll();
      }

      public function findByName($name)
      {
            return $this->sourceRepository->findByName($name)->first();
      }
}
