<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorPackageItem extends Model
{
    use HasFactory;
    protected $table = 'vendor_pacakge_items';

    protected $fillable = [
        'vendorpackage_id',
        'code',
        'title',
    ];
}
