<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorPackage extends Model
{
    use HasFactory;
    protected $table = 'vendor_pacakges';
    protected $fillable = [
        'name',
        'unique_id',
        'description',
        'billing_count',
        'billing_type',
        'price',
        'setup_cost',
        'free_trial',
        'is_active',
        'is_popular',

    ];
}
