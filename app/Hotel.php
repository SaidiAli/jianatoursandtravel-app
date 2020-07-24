<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = [];

    public function rooms() {
        return $this->hasMany('App\Room');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }
}
