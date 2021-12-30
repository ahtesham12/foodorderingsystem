<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProductVariationOption extends Model
{
    use HasFactory;
    protected $table = 'order_product_variation_options';

    protected $fillable = [
        'order_id',
        'orderproduct_id',
        'orderproductvariation_id',
        'product_id',
        'productvariation_id',
        'productvariationoption_id',
        'code',
        'name',
        'description',
        'price',
        'disocunt_price',
        'is_active',
    ];
}
