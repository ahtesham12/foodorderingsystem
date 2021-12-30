<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'customergroup_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'status',
        'is_approved',
        'user_id',
        'is_backlisted',
        'device_type',
    ];
}
