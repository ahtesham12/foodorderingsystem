<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductToMenuCategory extends Model
{
    use HasFactory;
    protected $table = 'product_to_menu_categories';

    protected $fillable = [
        'product_id',
        'menucategory_id',

    ];
}
