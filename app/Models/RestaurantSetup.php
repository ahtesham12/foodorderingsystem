<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantSetup extends Model
{
    use HasFactory;
    protected $table='restaurant_setups';
    protected $fillable=['name','user_id','phone','contact_name','country','city','address','logo','opening_time','closing_time','off_days'];
    
}