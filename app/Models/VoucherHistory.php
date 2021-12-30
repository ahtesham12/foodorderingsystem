<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherHistory extends Model
{
    use HasFactory;
    protected $table = 'voucher_histories';
    protected $fillable = [
        'voucher_id',
        'order_id',
        'amount',

    ];
}