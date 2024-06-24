<?php

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
Broadcast::channel('cart-price-{id}', function ($user, $id){
    return (int) $user->cart_id === (int) User::find($id)->cart_id;
});
