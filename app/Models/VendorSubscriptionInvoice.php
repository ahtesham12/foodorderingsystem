<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorSubscriptionInvoice extends Model
{
    use HasFactory;
    protected $table = 'vendor_subscription_invoices';
    protected $fillable = [
        'unique_name',
        'company_id',
        'customertransaction_id',
        'paid_on',
        'invoice_on',
        'billing_period',
        'total',

    ];
}
