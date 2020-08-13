<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        $images = Storage::files('hotel_covers/' . $hotel->name);
        $img_urls = array_map(function ($file) {
            return Storage::url($file);
        }, $images);

        return view('backend.hotel.management.preview')->with([
            'hotel' => $hotel, 'facilities' =>$facilities, 
            'hotelFacilities' => $hotelFacilities,
            'images' => $img_urls
            ]);
    }

    public function add_images($id) {
        $hotel = Hotel::where('id', $id)->first();
        return view('backend.hotel.management.add_images')->withHotel($hotel);
    }

    public function update_cover_images($id, Request $request) {
        $hotel = Hotel::where('id', $id)->first();

        if ($request->hasFile('file')) {
            if ($path = $request->file('file')->store('hotel_covers/' . $hotel->name)) {
                $hotel->cover_photos = Storage::url($path);
                $hotel->save();
                return response()->json(['message' => 'success']);
            }
        }
    }
}
