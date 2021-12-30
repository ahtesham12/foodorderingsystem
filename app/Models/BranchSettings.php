<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchSettings extends Model
{
    use HasFactory;
    protected $table='branch_settings';
    protected $fillable=['tax','delivery_time','takeaway_time','dine_in_time','user_id'];
}