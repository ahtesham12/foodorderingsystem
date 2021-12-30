<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    use HasFactory;

    protected $table = 'product_variations';

    protected $fillable = [
        'product_id',
        'name',
        'description',
        'minimum_quantity',
        'maximum_quanity',
        'is_active',
        'is_mandatory',
        'is_multi_select',
    ];
}
