<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $table = 'gallery';
    protected $fillable = [
        'product_id', 'path'
    ];

    /**
     * This Product Gallery Owned by Product
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getImagePathAttribute()
    {
        if ($this->path != '') {
            return url('/images/products/' . $this->path);
        } else {
            return 'http://placehold.it/850x618';
        }
    }
}
