<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;


route::get('/recipes', [RecipeController::class, 'index']);
Route::get('/recipes/create', [RecipeController::class, 'create']);
Route::post('/recipes', [RecipeController::class, 'store']);
