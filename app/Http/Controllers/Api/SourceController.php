<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Http\Resources\SourceResource;
use App\Services\SourceService;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    protected $sourceService;

    public function __construct(SourceService $sourceService)
    {
        $this->sourceService = $sourceService;
    }

    public function index()
    {
        $articles = $this->sourceService->getAll();
        return  SourceResource::collection($articles);
    }
}
