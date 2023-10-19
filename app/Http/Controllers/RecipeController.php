<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function show($id)
    {
        return inertia('RecipeDetails');
    }
}
