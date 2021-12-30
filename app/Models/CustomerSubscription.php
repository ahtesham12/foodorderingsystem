<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSubscription extends Model
{
    use HasFactory;
    protected $table = 'customer_subscriptions';

    protected $fillable = [
        'unique_name',
        'company_id',
        'vendorpackage_id',
        'billing_count',
        'billing_type',
        'price',
        'setup_cost',
        'free_trial',
        'next_billing_date',
        'next_billing_amount',
        'current_billing_cycle',
        'starts_at',
        'expires_at',
    ];

    protected $dates = ['starts_at', 'expires_at'];
}
