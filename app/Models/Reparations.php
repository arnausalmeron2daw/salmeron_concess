<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparations extends Model
{
    use HasFactory;

    protected $fillable = [
        'problem_description',
        'reparation_price',
        'reparation_date'
    ];

    function vehicle(){
        return $this->belongsToMany(Vehicle::class);
    }


}
