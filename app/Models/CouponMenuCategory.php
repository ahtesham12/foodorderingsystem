<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponMenuCategory extends Model
{
    use HasFactory;
    protected $table = 'coupon_menu_categories';
    protected $fillable = [
        'coupon_id',
        'menucategory_id',
    ];
}
