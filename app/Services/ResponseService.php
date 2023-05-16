<?php

namespace App\Services;

use App\Repositories\ResponseRepositoryInterface;


class ResponseService
{
      protected $responseRepository;
      protected $sourceRepository;

      public function __construct(ResponseRepositoryInterface $responseRepository)
      {
            $this->responseRepository = $responseRepository;
      }


      public function getAll()
      {
            return $this->responseRepository->getAll();
      }

      public function updateOrCreate($data)
      {
            return $this->responseRepository->updateOrCreate($data);
      }
}
