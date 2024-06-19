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
        $dish_categories = DishCategory::all()->each(function ($query){
            return $query->with('dishes');
        });
        return view('apps.dishes.index', compact('dish_categories'));
    }
}
