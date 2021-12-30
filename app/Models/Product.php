<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'code',
        'name',
        'description',
        'display_price',
        'is_prepacked_item',
        'is_sold_out',
        'taxclass_id',
        'weightclass_id',
        'weight',
        'length',
        'height',
        'width',
        'lengthclass_id',
        'price',
        'minimum_quantity',
        'maximum_quantity',
        'is_active',

    ];
}
