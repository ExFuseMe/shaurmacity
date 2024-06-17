<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dish extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price'];

    public function dishCategory(): BelongsTo
    {
        return $this->BelongsTo(DishCategory::class);
    }
}
