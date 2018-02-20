<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'slug', 'parent_id'];

    /**
     * This category has many sub-category
     * By parent_id as foreign key
     * @return void
     */
    public function childs()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    /**
     * These categories owned by parent
     * With parent_id as foreign key
     * @return void
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($model) {
            // remove parent from this category's child
            foreach ($model->childs as $child) {
                $child->parent_id = null;
                $child->save();
            }
        });
    }
}
