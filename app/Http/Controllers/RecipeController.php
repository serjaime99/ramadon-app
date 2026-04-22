<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * display a listing of all recipes
     */
    public function index()
    {
        // 1. list all recipes
        $recipes = Recipe::all();
        // 2. sending the data to the view 
        return view('recipes.index', compact('recipes'));
    }
}
