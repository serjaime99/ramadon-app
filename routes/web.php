<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;


route::get('/recipes', [RecipeController::class, 'index']);
