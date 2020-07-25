<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Illuminate\Support\Facades\DB;

class HotelsManagement extends Controller
{
    public function manage() {
        $hotels = auth()->user()->hotels;

        return view('backend.hotel.management.index')->with(['hotels' => $hotels]);
    }

    public function preview($id)
    {
        $hotel = Hotel::where('id', $id)->first();
        $facilities = DB::table('facilities')->get()->toArray();
        $hotelFacilities = explode(',', $hotel->facilities);

        return view('backend.hotel.management.preview')->with([
            'hotel' => $hotel, 'facilities' =>$facilities, 'hotelFacilities' => $hotelFacilities
            ]);
    }
}
