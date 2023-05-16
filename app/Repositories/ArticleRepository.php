<?php

namespace App\Repositories;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleRepository implements ArticleRepositoryInterface
{
      protected $model;

      public function __construct(Article $model)
      {
            $this->model = $model;
      }

      public function getAll($request)
      {
            $query = $this->model::query();
            // Filter by category
            if ($request->has('category_id')) {
                  $query->where('category_id', $request->category_id);
            }

            // Filter by author
            if ($request->has('author_id')) {
                  $query->where('author_id', $request->author_id);
            }

            // Filter by source
            if ($request->has('source_id')) {
                  $query->where('source_id', $request->source_id);
            }

            // Filter by date
            if ($request->has('date_from')) {
              $query->whereBetween('published_at', [$request->date_from, $request->date_to]);
            }

            // Filter by date
            if ($request->has('keyword')) {
                  $query->where('title', 'LIKE', "%{$request->keyword}%")
                  ->orWhere('description', 'LIKE', "%{$request->keyword}%");
            }
            $articles = $query->get();
            return  $articles;
      }

      public function create(array $data)
      {
            return $this->model::create($data);
      }

      public function updateOrCreate($data)
      {
            return $this->model::updateOrCreate($data);
      }
}
