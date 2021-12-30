<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LengthClass extends Model
{
    use HasFactory;
    protected $table = 'length_classes';

    protected $fillable = [
        'title',
        'unit',
        'value',
    ];
}
