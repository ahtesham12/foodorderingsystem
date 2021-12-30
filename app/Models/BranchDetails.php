<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchDetails extends Model
{
    use HasFactory;

    protected $table='branch_details';
    protected $fillable=['branch_status','branch_name','branch_address','delivery','takeaway','dine_in','opening_time','closing_time','off_days'];
}