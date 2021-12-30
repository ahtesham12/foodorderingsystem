<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeoZone extends Model
{
    use HasFactory;
    protected $table = 'geo_zones';

    protected $filalble = [
        'name',
        'description',
        'is_active',
    ];
}
