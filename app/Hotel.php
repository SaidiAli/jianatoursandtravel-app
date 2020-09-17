<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Hotel extends Model
{
    use SoftDeletes, Searchable;
    
    protected $guarded = [];
    
    public function facilities()
    {
        return $this->belongsToMany(Facility::class);
    }

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
