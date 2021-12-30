<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;
    protected $table = 'variations';

    protected $fillable = [
        'code',
        'name',
        'description',
        'minimum_quantity',
        'maximum_quantity',
        'is_active',
        'is_mandatory',
        'is_multi_select',
    ];
}
