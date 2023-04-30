<?php

namespace App\Models\Admin;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;



class Product extends Model
{
    use HasFactory,HasTranslations,HasSlug ;
    protected $fillable=['name','price','image','count','desc','category_id'];
    public $translatable=['name','desc'];
    const PATH = 'image/product';
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    public function getImageAttribute($value):string
    {
        return $this::PATH.DIRECTORY_SEPARATOR.$value;
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
