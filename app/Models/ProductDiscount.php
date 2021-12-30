<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDiscount extends Model
{
    use HasFactory;
    protected $table = 'product_discounts';

    protected $fillable = [
        'product_id',
        'customergroup_id',
        'quantity',
        'priority',
        'price',
        'date_start',
        'date_end',
    ];

    protected $dates = [
        'date_start',
        'date_end',
    ];
}
