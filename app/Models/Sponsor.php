<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $fillable = [
        'title', 'path', 'type', 'status'
    ];

    public static function sponsorType()
    {
        $type = [
            'sidebanner' => 'Side Banner',
            'sideoffer' => 'Side Offer',
            'banner-left' => 'Banner Left',
            'banner-right' => 'Banner Right',
            'featured' => 'Featured',
        ];
        return $type;
    }
}
