<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRelated extends Model
{
    use HasFactory;

    protected $table = 'product_relateds';

    protected $fillable = [
        'product_id',
        'related_id',
    ];
}
