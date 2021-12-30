<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'invoice_number',
        'invoice_prefix',
        'customer_id',
        'customergroup_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'payment_first_name',
        'payment_last_name',
        'payment_company',
        'payment_address_1',
        'payment_address_2',
        'payment_city',
        'payment_postal_code',
        'payment_country',
        'paymentcountry_id',
        'payment_zone',
        'paymentzone_id',
        'payment_address_format',
        'payment_method',
        'payment_code',
        'shipping_first_name',
        'shipping_last_name',
        'shipping_company',
        'shipping_address_1',
        'shipping_address_2',
        'shipping_city',
        'shipping_postal_code',
        'shipping_country',
        'shippingcountry_id',
        'shipping_zone',
        'shippingzone_id',
        'shipping_address_format',
        'shipping_method',
        'shipping_code',
        'shipping_longitude',
        'shipping_latitude',
        'comment',
        'total',
        'delivery_time',
        'delivery_eta',
        'is_payment_verified',
        'orderstatus_id',
    ];
}
