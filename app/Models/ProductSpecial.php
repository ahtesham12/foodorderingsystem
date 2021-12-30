<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecial extends Model
{
    use HasFactory;
    protected $table = 'product_specials';

    protected $fillable = [
        'product_id',
        'customergroup_id',
        'priority',
        'price',
        'date_start',
        'date_start',
    ];

    protected $dates = [
        'date_start',
        'date_end',
    ];
}
