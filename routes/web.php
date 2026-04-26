<?php

use App\Http\Controllers\RecipeController;
use App\Models\Recipe;
use Illuminate\Support\Facades\Route;


route::get('/recipes', [RecipeController::class, 'index']);
Route::get('/recipes/create', [RecipeController::class, 'create']);
Route::post('/recipes', [RecipeController::class, 'store']);
route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit']);
route::put('/recipes/{recipe}/update', [RecipeController::class, 'update']);
Route::delete('/recipes/{recipe}', [RecipeController::class, 'destroy']);
