<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuType extends Model
{
    use HasFactory;
    protected $table = 'menu_types';

    protected $fillable = [
        'code',
        'name',
        'description',
        'is_active',
    ];
}
