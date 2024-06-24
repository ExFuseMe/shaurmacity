<?php

namespace App\Traits;

use App\Models\Dish;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait hasDishesTrait
{
    public function dishes(): BelongsToMany
    {
        return $this->belongsToMany(Dish::class, 'carts_dishes', 'cart_id', 'dish_id');
    }

    public function addToCart(Dish $dish): void
    {
        $this->dishes()->attach($dish->id, ['created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
    }

    public function removeFromCart(Dish $dish): void
    {
        $this->dishes()->detach($dish->id);
    }

    public function clearCart(Dish $dish): void
    {
        $current_cart = $this->dishes()->get();
        foreach ($current_cart as $dish){
            $this->removeFromCart(Dish::find($dish));
        }
    }
}
