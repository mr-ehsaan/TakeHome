<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PassportAuthController;
use App\Http\Controllers\Api\PreferenceController;
use App\Http\Controllers\Api\SourceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);

Route::get('sources', [SourceController::class, 'index']);
Route::get('articles', [ArticleController::class, 'index']);
Route::get('categories', [CategoryController::class, 'index']);
Route::get('author', [AuthorController::class, 'index']);
Route::get('getArticlesFromNewsApi', [ArticleController::class, 'getArticlesFromNewsApi']);
Route::get('fetchArticlesFromNewyorkTimeApi', [ArticleController::class, 'fetchArticlesFromNewyorkTimeApi']);

Route::middleware('auth:api')->group(function () {
    Route::get('preference', [PreferenceController::class, 'index']);
    Route::post('user-preference', [PreferenceController::class, 'updateOrCreate']);


});

// routes/api.php
Route::fallback(function (){
    abort(404, 'API resource not found');
});
