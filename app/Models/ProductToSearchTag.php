<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductToSearchTag extends Model
{
    use HasFactory;
    protected $table = 'product_to_search_tags';

    protected $fillable = [
        'product_id',
        'searchtag_id',
    ];
}
