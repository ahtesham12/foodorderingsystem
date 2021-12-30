<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorSubscriptionInvoiceItem extends Model
{
    use HasFactory;
    protected $table = 'vendor_subscription_invoice_items';
    protected $fillable = [
        'item',
        'quantity',
        'amount',
        'invoice_id',
    ];
}
