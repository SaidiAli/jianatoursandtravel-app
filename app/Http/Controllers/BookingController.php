<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store() {
        dd('Booking here');
        return view('backend.booking.create');
    }
}
