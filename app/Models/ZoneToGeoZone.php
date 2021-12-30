<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZoneToGeoZone extends Model
{
    use HasFactory;
    protected $table = 'zone_to_geo_zones';
    protected $fillable = [
        'country_id',
        'zone_id',
        'get_zone_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
