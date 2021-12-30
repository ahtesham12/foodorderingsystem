<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation_option extends Model
{
    use HasFactory;

    protected $table = 'variation_options';

    protected $fillable = [
        'code',
        'name',
        'description',
        'price',
        'variation_id',
        'is_active',
    ];
}
