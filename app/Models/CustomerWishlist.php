<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerWishlist extends Model
{
    use HasFactory;

    protected $table = 'customer_wishlists';
    protected $fillable = [
        'customer_id',
        'product_id',
    ];
}
