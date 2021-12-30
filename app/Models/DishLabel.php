<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishLabel extends Model
{
    use HasFactory;
    protected $table='dish_labels';
    protected $fillable=['dishes_names'];
}