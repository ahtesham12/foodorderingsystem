<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;

    protected $table = 'customer_addresses';
    protected $fillable = [
        'customer_id',
        'first_name',
        'last_name',
        'company',
        'address_1',
        'address_2',
        'city',
        'postal_code',
        'country_id',
        'zone_id',
    ];
}
