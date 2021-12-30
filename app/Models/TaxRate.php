<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxRate extends Model
{
    use HasFactory;
    protected $table = 'tax_rates';

    protected $fillable = [
        'geozone_id',
        'name',
        'rate',
        'tax_rate_type',

    ];
}
