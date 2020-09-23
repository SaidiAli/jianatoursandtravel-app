<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Notifications\BookingSuccessful;
use Illuminate\Support\Facades\Notification;

class PaymentController extends Controller
{
    public function index(Request $request) {
        $booking = Booking::where('id', $request->query('id'))->first();
        Notification::send($booking->user, new BookingSuccessful($booking));

        return view('backend.payment.hotel');
    }
}
