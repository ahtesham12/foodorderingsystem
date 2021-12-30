<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerMeta extends Model
{
    use HasFactory;
    protected $table = 'customer_metas';
    protected $fillable = [
        'customer_id',
        'total_orders',
        'total_revenue',
        'first_order_at',
        'last_order_at',
        'referred_from',
    ];

    protected $dates = ['first_order_at', 'last_order_at'];
}
