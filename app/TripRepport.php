<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripRepport extends Model
{
    public function requests()
    {
        return $this->belongsToMany('App\TripRequest');
    }
}
