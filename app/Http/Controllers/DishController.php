<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\DishCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DishController extends Controller
{
    public function index(Request $request): View
    {
        $dish_categories = DishCategory::has('dishes')->with('dishes')->get()->filter(function ($category) {
            return $category->dishes->count() > 0;
        });
        return view('apps.dishes.index', compact('dish_categories'));
    }
}
