<?php

namespace App\Services;

use App\Repositories\CategoryRepositoryInterface;

class CategoryService
{
      protected $categoryRepository;

      public function __construct(CategoryRepositoryInterface $categoryRepository)
      {
            $this->categoryRepository = $categoryRepository;
      }


      public function getAll()
      {
            return $this->categoryRepository->getAll();
      }

      public function updateOrCreate($data)
      {
            return $this->categoryRepository->updateOrCreate($data);
      }

      public function findByName($name)
      {
            return $this->categoryRepository->findByName($name);
      }
}
