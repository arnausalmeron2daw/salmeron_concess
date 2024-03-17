<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_vehicle',
        'sale_date',
        'payment_method',

    ];

    function vehicle(){
        return $this->belongsToMany(Vehicle::class);
    }


}
