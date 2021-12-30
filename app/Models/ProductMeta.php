<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMeta extends Model
{
    use HasFactory;
    protected $table = 'product_metas';

    protected $fillable = [
        'code',
        'title',
        'description',
        'keywords',
        'product_id',
        'delivery_time',
        'colories',
    ];

    protected $dates = 'delivery_time';
}
