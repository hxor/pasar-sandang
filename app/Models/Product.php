<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'slug', 'name', 'description', 'price', 'weight',
        'hotoffer', 'stock'
    ];

    /**
     * This product has many images product
     */
    public function images()
    {
        return $this->hasMany(ProductGallery::class);
    }

    /**
     * This Products owned by Many Categories
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Get Category Lists Product
     * by category_lists accessor
     */
    public function getCategoryListsAttribute()
    {
        if ($this->categories()->count() < 1) {
            return null;
        }
        return $this->categories->pluck('id')->all();
    }

    public static function boot()
    {
        parent::boot();
        
    	static::deleting(function($model) {
    		// remove relations to category
    		$model->categories()->detach();
    	});
    }
}
