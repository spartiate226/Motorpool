<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripRequest extends Model
{
    function Vehicle(){
        return $this->hasOne(Vehicle::class);
    }
}
