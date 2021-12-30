<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSubscriptionTransaction extends Model
{
    use HasFactory;

    protected $table = 'customer_subscription_transactions';

    protected $fillable = [
        'unique_id',
        'company_id',
        'customersubscription_id',
        'type',
        'amount',
        'comments',
        'is_success',
    ];
}
