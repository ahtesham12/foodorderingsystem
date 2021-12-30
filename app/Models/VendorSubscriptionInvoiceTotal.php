<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorSubscriptionInvoiceTotal extends Model
{
    use HasFactory;
    protected $table = 'vendor_subscription_invoice_totals';
    protected $fillable = [
        'type',
        'amount',
        'invoice_id',
    ];
}
