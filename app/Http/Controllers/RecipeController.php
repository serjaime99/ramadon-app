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
  public function create()
  {
    return view('recipes.create');
  }

  public function store(Request $request)
  {
    // 1. Validation: Force the user to provide a title and content
    $validated = $request->validate([
      'title' => 'required',
      'content' => 'required',
    ]);

    // 2. Save to database using the Model
    \App\Models\Recipe::create($validated);

    // 3. Redirect the user back to the list so they can see their new recipe
    return redirect('/recipes');
  }
  // Show the form to edit
  public function edit(Recipe $recipe)
  {
    return view('recipes.edit', compact('recipe'));
  }

  // Save the changes
  public function update(Request $request, Recipe $recipe)
  {
    $recipe->update($request->validate(['title' => 'required', 'content' => 'required']));
    return redirect('/recipes');
  }

  // Remove from database
  public function destroy(Recipe $recipe)
  {
    $recipe->delete();
    return redirect('/recipes');
  }
}
