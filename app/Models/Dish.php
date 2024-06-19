<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Dish extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $fillable = ['name', 'price'];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaCollection('dish-image');
        $this
            ->addMediaConversion('dish-preview')
            ->fit(Fit::Contain, 512, 512)
            ->nonQueued();
    }

    public function dishCategory(): BelongsTo
    {
        return $this->BelongsTo(DishCategory::class);
    }
}
