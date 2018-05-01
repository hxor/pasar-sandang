<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = ['title', 'number', 'owner', 'status'];

    public function orderConfirm()
    {
        return $this->hasMany(OrderConfirm::class);
    }
}
