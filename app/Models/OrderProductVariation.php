<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProductVariation extends Model
{
    use HasFactory;
    protected $table = 'order_product_variations';

    protected $fillable = [
        'order_id',
        'orderproduct_id',
        'prdoduct_id',
        'productvariation_id',
        'name',
        'description',
        'minimum_quantity',
        'maximum_quantity',
        'is_active',
        'is_mandatory',
        'is_multi_select',
    ];
}
