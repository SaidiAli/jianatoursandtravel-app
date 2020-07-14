<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class PagesController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function hotels()
    {
        $hotels = Hotel::all();
        return view('pages.hotels')->with('hotels', $hotels);
    }

    public function tours() {
        return view('pages.tours');
    }
}
