<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponType extends Model
{
    use HasFactory;
    protected $table = 'coupon_types';
    protected $fillable = [
        'coupon_type',
    ];
}
