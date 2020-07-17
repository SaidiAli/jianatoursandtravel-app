<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request) {
        // $request->validate([
        //     'check_in_date' => 'required',
        //     'check_in_time' => 'required',
        //     'check_out_date' => 'required',
        //     'check_out_time' => 'required',
        // ]);

        $booking = Booking::create([
            'check_in_date' => $request->input('check_in_date'),
            'check_in_time' => $request->input('check_in_time'),
            'check_out_date' => $request->input('check_out_date'),
            'check_out_time' => $request->input('check_out_time'),
            'user_id' => auth()->user()->id,
            'hotel_id' => $request->input('hotel_id'),
            'adults' => $request->input('adults'),
            'children' => $request->input('children'),
            'total_price' => $request->input('total_price'),
            'number_of_rooms' => $request->input('number_of_rooms'),
            'payment_status' => false,

        ]);

        return response()->json([
            'rooms' => gettype(json_encode($request->input('rooms')))
        ]);
    }
}
