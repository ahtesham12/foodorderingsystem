<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupons';
    protected $fillable = [
        'name',
        'code',
        'type',
        'discount',
        'start_date',
        'end_time',
        'is_for_new_users',
        'max_count',
        'max_count_per_user',
        'minimum_order_amount',
        'freeproduct_id',
    ];
}
