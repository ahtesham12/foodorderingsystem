<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxRateToCustomerGroup extends Model
{
    use HasFactory;

    protected $table = 'tax_rate_to_customer_groups';

    protected $fillable = [
        'taxrate_id',
        'customergroup_id',
    ];
}
