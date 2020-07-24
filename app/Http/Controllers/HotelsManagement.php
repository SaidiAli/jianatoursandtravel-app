<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelsManagement extends Controller
{
    public function manage() {
        $hotels = auth()->user()->hotels;

        return view('backend.hotel.management.index')->with(['hotels' => $hotels]);
    }

    public function preview($id)
    {
        $hotel = Hotel::where('id', $id)->first();
        return view('backend.hotel.management.preview')->withHotel($hotel);
    }
}
