<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTransaction extends Model
{
    use HasFactory;
    protected $table = 'customer_transactions';

    protected $fillable = [
        'customer_id',
        'order_id',
        'description',
        'amount',
    ];
}
