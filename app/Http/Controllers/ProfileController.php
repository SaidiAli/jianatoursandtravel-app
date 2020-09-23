<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $user = auth()->user();
        $bookings = $user->bookings;
        return view('backend.profile')->with([
            'user' => $user,
            'bookings' => $bookings
        ]);
    }
}
