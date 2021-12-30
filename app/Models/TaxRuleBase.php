<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxRuleBase extends Model
{
    use HasFactory;
    protected $table = 'tax_rule_bases';

    protected $fillable = [
        'tax_rule_bases',
    ];
}
