<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    function TripRequest(){
        return $this->belongsTo(TripRequest::class);
    }
}
