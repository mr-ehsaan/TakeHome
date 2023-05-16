<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PreferenceResource;
use App\Services\PreferenceService;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    protected $preferenceService;

    public function __construct(PreferenceService $preferenceService)
    {
        $this->preferenceService = $preferenceService;
    }

    public function index()
    {
        $preference = $this->preferenceService->getAll();
        return  PreferenceResource::collection($preference);
    }

    public function updateOrCreate(Request $request)
    {
      $data['user_id'] = auth()->user()->id;
      $data['category_id'] = $request->category_id;
      $data['source_id'] = $request->source_id;
      $data['author_id'] = $request->author_id;
      $data['date_from'] = $request->date_from;
      $data['date_to'] = $request->date_to;
       $this->preferenceService->updateOrCreate(['user_id' =>auth()->user()->id], $data);
    }
}

