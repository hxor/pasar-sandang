<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'invoice', 'name', 'phone', 'address', 'shippfee', 'total', 'grandtotal', 'status'
    ];
}
