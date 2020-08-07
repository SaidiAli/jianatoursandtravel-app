<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use App\Hotel;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function home() {
        $cars = Car::all()->toArray();

        return view('welcome')->with(['cars' => $cars]);
    }

    public function hotels()
    {
        $hotels = Hotel::all();
        return view('pages.hotels')->with('hotels', $hotels);
    }

    public function tours() {
        return view('pages.tours');
    }

    public function car_hire_and_sale() {
        $cars = Car::where('available', true)->get()->toArray();
        return view('pages.car_hire_and_sale')->with(['cars' => $cars]);
    }

    public function car_preview(Request $request) {
        $id = $request->query('id');
        $car = Car::where('id', $id)->first();
        $images = Storage::files('car_images/' . $id);
        $img_urls = array_map(function ($file) {
            return Storage::url($file);
        }, $images);
        return view('pages.car_preview')->with(['car' => $car, 'images' => $img_urls]);
    }
}
