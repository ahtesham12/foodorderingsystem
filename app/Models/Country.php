<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    protected $fillable = [
        'name',
        'iso_code_1',
        'iso_code_2',
        'iso_code_3',
        'address_format',
        'is_active',
    ];
}
