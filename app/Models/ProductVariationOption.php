<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariationOption extends Model
{
    use HasFactory;

    protected $table = 'product_variation_options';

    protected $fillable = [
        'code',
        'name',
        'description',
        'price',
        'discount_price',
        'productvariation_id',
        'is_active',
    ];
}
