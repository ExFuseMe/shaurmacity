<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DishController extends Controller
{
    public function index(Request $request): View
    {
        $dishes = Dish::all();
        return view('apps.dishes.index', compact('dishes'));
    }
}
