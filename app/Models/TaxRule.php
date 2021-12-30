<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxRule extends Model
{
    use HasFactory;
    protected $table = 'tax_rules';

    protected $fillable = [
        'taxclass_id',
        'taxrate_id',
        'tax_rule_bases',
        'priority',
    ];
}
