<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Http\Resources\ArticleResource;
use App\Services\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index(Request $request)
    {
        $articles = $this->articleService->getAll($request);
        return  ArticleResource::collection($articles);
    }

    public function getArticlesFromNewsApi(Request $request)
    {
          $this->articleService->getArticlesFromNewsApi($request);

    }

    public function fetchArticlesFromNewyorkTimeApi()
    {
      return  $this->articleService->fetchArticlesFromNewyorkTimeApi();
    }

    public function fetchArticlesFromGuardianApi()
    {
        return  $this->articleService->fetchArticlesFromGuardianApi();
    }

}
