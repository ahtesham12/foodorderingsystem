<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    use HasFactory;
    protected $table = 'menu_categories';

    protected $fillable = [
        'code',
        'name',
        'description',
        'banner',
        'is_popular_category',
        'is_active',
        'dishlabel_id',
 
    ];
    
   
}