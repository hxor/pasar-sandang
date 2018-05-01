<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderConfirm extends Model
{
    protected $fillable = [
        'order_id', 'bank_id', 'amount', 'name', 'note', 'file'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}
