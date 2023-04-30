<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory,HasTranslations,HasSlug;
    const PATH = 'image/gallery';
    protected $fillable=['name','image'];
    public $translatable = ['name'];


    public function getImageAttribute($value):string
    {
        return $this::PATH.DIRECTORY_SEPARATOR.$value;
    }

    public  function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    /**
     * @return SlugOptions
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }


}
