<?php

namespace App\Http\Controllers;

use App\Events\changeCartPriceEvent;
use App\Http\Requests\CartUpdateRequest;
use App\Models\Cart;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CartUpdateRequest $request)
    {
        $user = Auth::user();
        if($user){
            if(is_null($user->cart_id)){
                $userCart = Cart::create();
                $user->cart_id = $userCart->id;
                $user->save();
            }
            $user->cart()->addToCart(Dish::find($request->validated()['dish_id']));
            event(new changeCartPriceEvent($user->cart()));
        }
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
