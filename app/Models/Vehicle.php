<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicle';
    protected $primaryKey = 'id_vehicle';

    protected $fillable = [
        'car_img',
        'enrolement',
        'brand',
        'model',
        'year',
        'body_type',
        'price'
    ];

}
